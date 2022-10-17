<?php

namespace App\Http\Controllers;
use \Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Mail\Markdown;
use \Carbon\Carbon;
use Illuminate\Support\MessageBag;
use App\User;
use App\AppUser;
use App\Mail\csaMailer;
use App\Mail\infoMailer;
use App\Mail\UserValidator;
use Illuminate\Support\Str;
use App\Registration;
use App\TempReg;
use App\PlusDownload;
use App\User as MyUser;
use Finfo;

class SiteController extends Controller
{
  public function index(){
    $user = new MyUser();
    dd($user);
    //self::RemoveSessionValriables();
    //return view('vendor.mail.html.layout')->with('slot','Promotion');
    return view('about');
}   //



public function mine()
{
  return view('layouts.mine')->with('success',"Good");
}
public function contact()

{
  return view('contact');
}


public function screenshots()
{
   
  return view('screenshots');
}


public function download()
{
 /* $reg=Registration::all();
  $mail= new \App\Mail\OrderShipped($reg);
  return $mail->render();
*/
  return view('download');
}


public function sendValidationEmail(Request $request)
{

    
  $check=Validator::make($request->all(),
    [
      'fname'=>'required|min:4',
      'surname'=>'required|min:4',
      'phone'=>'required|digits_between:9,12|unique:app_users,phone',
      'email'=>'unique:app_users,email',
      'agree'=>'required',

    ]);

    if($check->fails()){
      Session(['attempted'=>1]);
        //test if its a returning user
      $numberError = $check->messages()->first('phone')? strlen($check->messages()->first('phone')): null;
      $emailError = $check->messages()->first('email')? strlen($check->messages()->first('email')): null;
      $agreeError = $check->messages()->first('agree');
      if($agreeError){
        $msg=new MessageBag;
        $msg->add('agree','You must agree to proceed!');
       return back()->withErrors($msg)->withInput();
      }
    }

    //Test if user exist
    $returningUser = $this->TestReturningUser($request);

    if($returningUser !== null){
      return redirect()->to('/download#ready')->with('info',"Welcome back ". $returningUser->name. " ".$returningUser->surname.". Click on the Download button to download.");
    }

    $token=bcrypt($request->email.'Salt-Salt');

    $expireTime=Carbon::now()->addMinutes(120)->getTimeStamp();
    
    $TempReg = new TempReg();
    $TempReg->token = $token;
    $TempReg->fname = $request->fname;
    $TempReg->surname = $request->surname;
    $TempReg->phone = $request->phone;
    $TempReg->email = $request->email;
    $TempReg->expireTime = $expireTime;
    $TempReg->save();


    //dd([$expireTime,now()->addMinutes(30)->getTimeStamp()]);
   
    $email_validate_url=URL::temporarySignedRoute(
      'email.validated',$expireTime,['token'=>$token]
    );
    $subject="Email Validation - CSA";
    $msg="Click this <a href='".$email_validate_url."'>link</a> to validate your email and download CSA.
    <br> If this link is not working, copy the following text and paste in your browser.<br><br>
    ".$email_validate_url;

    $mailer= new infoMailer($subject,$msg);
    return $mailer->render();

    Mail::to($request->email)->send(new infoMailer($subject,$msg));
    
    return redirect()->route('download')->with('info','Check your email address to proceed');    

}

public function fromEmail(Request $request)
{
  $temp = TempReg::where('token', '=', $request->token)->first();
  if(!$temp){
    return redirect()->route('download')->with('warning','This link is invalid. Start the process again.');
  }

  return redirect()->route('app.user.register',['token'=> $request->token]);
  
  if($request->hasValidSignature()){
    $token=session('token');
    if($token !=$request->token){
      return redirect()->route('download');
    }
    return redirect()->route('app.user.register');    
  }  

}

public function app_user_register(Request $request)
{    
  $temp = TempReg::where('token', $request->token)->first();
  $appuser= AppUser::where('email',$temp->email)->orWhere('phone', $temp->phone)->first();
  //dd($request->all());
  if($appuser == null){
    
    $appuser = new \App\AppUser;

    $appuser->name = $temp->fname;
    $appuser->surname = $temp->surname;
    $appuser->email = $temp->email;
    $appuser->phone = $temp->phone;

    try{
       $appuser->save();
    }catch(QueryException $ex){
        return redirect()->route('download')->with("warning", "This link have expired, fill the form and try again.");
    }
   

    $user = User::where('email',$temp->email)->first();
    if(!$user){
      $user=User::create([
        'name' => $temp->fname,
        'surname' =>$temp->surname,
        'email' => $temp->email,
        'password' => bcrypt($temp->phone),
        'api_token' => Str::random(60),
      ]);
    }

  }

  if($temp)
     $temp->delete();
 
  $expireTime=Carbon::now()->addMinutes(30)->getTimeStamp();

  Session(['expireTime'=>$expireTime]);

  $downloadPath=URL::temporarySignedRoute(
    'download1',now()->addMinutes(60)
  );
  //dd($appuser);
 
  Session(['url'=>$downloadPath]);
  Session(['app_user'=>$appuser->id]);
  Session(['ip'=>request()->ip()]);
  return redirect()->to('/download#ready')
  ->with('success',"Click on the Download button to download.");
}


public function download1(Request $request)
{
  if (! $request->hasValidSignature() && !auth()->check()) {
    session()->forget('url');
   return redirect()->route('download')
   ->with('warning','Something is missing');
  }

  $versions=\App\AppVersion::orderBy('id','asc')->get();
  $last=$versions[0];

  if(auth()->check()){
    $download=new \App\Downloads;
    $download->app_user_id=auth()->user()->id;//session('app_user');
    $download->ip_address=request()->ip();
    $download->version=$last->version;
    $download->save();
    $version=\Str::snake($last->version);
    $name='Congregation_Secretary\'s_assistant_'.$version.'.msi';

    return Storage::disk('public')->download('csa.msi', $name);
  }

  $download=new \App\Downloads;
  $download->app_user_id=session('app_user');
  $download->ip_address=session('ip');
  $download->version=$last->version;
  $download->save();
  $version=\Str::snake($last->version);
  $name='Congregation_Secretary\'s_assistant_'.$version.'.msi';

  return Storage::disk('public')->download('csa.msi', $name);
}


public function downloadPlus(Request $request)
{
  

  $versions=\App\AppVersion::orderBy('id','desc')->get();
  $last=$versions[0];

    $download=new PlusDownload();
    $download->ip_address=request()->ip();
    $version=\Str::snake($last->version);
    $name='Congregation_Secretary\'s_assistant_Plus'.'.msi';

    return Storage::disk('plus')->download('setup.msi', $name);
  
}

public function TestReturningUser(Request $request){

  $appUser = AppUser::where('email', $request->email)->orWhere('phone',$request->phone)->first();
  if($appUser !== null){
    $expireTime=Carbon::now()->addMinutes(30)->getTimeStamp();

    Session(['expireTime'=>$expireTime]);

    $downloadPath=URL::temporarySignedRoute(
    'download1',now()->addMinutes(60)
    );
    //dd($appuser);
 
    Session(['url'=>$downloadPath]);
    Session(['app_user'=>$appUser->id]);
    Session(['ip'=>request()->ip()]);
    return $appUser;
  }

  return null;
}


public function about()
{
  //cookie('test','Benjamin',3080000);
  return view('about');
}

public static function RemoveSessionValriables(){
  Session()->remove('url');
  Session()->remove('attempted');
  Session()->remove('url');
  Session()->remove('expireTime');
}

public function update(Request $request)
{
  
  $registered= Registration::where('code',$request->code)->first();
  if(!$registered){
    abort(403,"Register the app to receive updates!");
  }
  $name='Congregation_Secretary\'s_assistant.msi';
  $file=Storage::disk('updates')->download('csa.msi');
  return $file;
  return Storage::disk('updates')->download('csa.msi', $name);
}

public function getFeedBack(Request $request)
{
  if(isset($request->version) && isset($request->os)&& isset($request->path))
  {
    $data = ['os'=>$request->os,'path'=>$request->path,'version'=>$request->version]; 
    session(['from_app'=>$data]);    
    return redirect()->route('support.feedback.form')->with(['data'=>$data]);
  }
  return redirect()->route('support.feedback.form');
}

public function showForm(Request $request)
{

  return view('report');
}

public function postFeedBack(Request $request)
{
  $check=Validator::make($request->all(),[
    'fname'=>'required|min:5|string:255',
    'email'=>'required|email',
    'information'=>'required|string:500|min:20'
  ]);

  if($check->fails()){
    return back()->withErrors($check)
    ->withInput();
  }

  $report=new \App\reports;
  $report->name=$request->fname;
  $report->email=$request->email;
  $report->info=$request->information;
  $report->save();

  $data=['sender'=>$request->fname,'email'=>$request->email,'message'=>$request->information];

  $mail= new csaMailer($data);
  //return $mail->render();
  Mail::to('benjamin.obinna@yahoo.com')->send(new csaMailer($data));

  return redirect()->to('/')
  ->with('success','Thank you for your feedback. It will be attended to in good time.');
}



public function registerCsa(Request $request)
{
  
  $check = Validator::make($request->all(),
    ['email'=>'required|email',
      'from_csa'=>'required',
      'email'=>'required',
    ]);
  if ($check->fails()){
    abort(404,"The requested resource was not found.");
  }
  $email=$request->email;
  $from_csa=$request->from_csa;
  if(!$from_csa){
    return "error";
  }

  $user=User::where('email',$request->email)->first();
  if($user){
    $mail=new UserValidator($user->api_token);
    return $mail->render();
    Mail::to($user->email)->send(new UserValidator($user->api_token));
    return redirect()->to('/')->with('success',"Check your mail.");
  }else{
    return "Unknown";
  }
}


public function checkout(Request $request)
{
  return view('payment.check-out');
}

public function identifyUser(Request $request){

    $appUser=null;
    $app= \App\RojexApp::where('code',$request->program_code)->first();

    if($app){
        //return '{"id":0,"reason":"code error"}';

      $appUser= User::join('app_users','users.email','=','app_users.email')
        // ->('rojex_apps','rojex_apps.code')
      ->select('users.id','users.name','users.surname','users.email','users.api_token','app_users.phone')
      ->where('users.email','=',"$request->email")->get();
    }else{
      $appUser= User::join('app_users','users.email','=','app_users.email')
        // ->('rojex_apps','rojex_apps.code')
      ->select('users.id','users.name','users.surname','users.email','users.api_token','app_users.phone')
      ->where('users.api_token','=',"$request->api_token")->get();
    }

    //dd([$app,$appUser]);

    if(isset($appUser[0])){
      return $appUser[0]->toJson();
    }else{
      return '{"id":0,"reason":"keyError"}';
    }
  }




  public function generateToken(Request $request)
  {
    $users =User::all();
    foreach($users as $user){
      $user->api_token=Str::random(60);
      $user->save();
    }
    
    return redirect()->to('/')
    ->with('success','Operation was successful');
  }


  public function webhook(Request $request){
    dd($request);
  }


}
