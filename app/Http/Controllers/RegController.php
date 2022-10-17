<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\SendCode;
use App\AppUser;
use App\User;
use App\Registration;
use App\RojexApp;

class RegController extends Controller
{
	public function __construct(){
		//$this->middleware('regGuard');
	}

	public function sendCode(Request $request)
	{

		$app=RojexApp::where('code',$request->code);
		if(!$app) return response("code", null)->header('token',null);
		$code=\Str::random(10);
		$code=\Str::upper($code);
		
		$token=csrf_token();
		//return $code;

		//$mail=new SendCode($code);
		//return $mail->render();
		// Mail::to($request->email)->send(new SendCode($code));
		 return response($code)->header('code',$code)
		 ->header('token',$token);

	}


	public function createAccountAndRegister(Request $request)
	{

		$this->validate($request, [
			'name'=>'required',
			'surname'=>'required',
			'email'=>'required|email',
			'phone'=>'required|max:12'
		]);	

		$user=User::where('email',$request->email)->first();
		if(!$user) {
			$user=new User;
		    $user->name=$request->name;
		    $user->surname=$request->surname;
		    $user->email=$request->email;
		    $user->password=bcrypt($request->phone);
		    //$user->phone=$request->phone;
		    $user->api_token=\Str::random(60);
		    $user->save();
		}

		$user=User::where('email',$request->email)->first();

	    $app_user = AppUser::where('email', $request->email)->orWhere('phone',$request->phone)->first();
		
		if(!$app_user){
			$app_user = new AppUser;			
			$app_user->name=$request->name;
			$app_user->surname=$request->surname;
			$app_user->email=$request->email;
			$app_user->phone=$request->phone;
			$app_user->save();
		}			
        $app_user = AppUser::where('email', $request->email)->orWhere('phone',$request->phone)->first();
        
		$reg = Registration::where('app_user_id', $app_user->id)->first();
		if(!$reg){
			$reg= new Registration;
		
			$reg->app_user_id=$app_user->id;
			$reg->base_board_version=$request->BaseBoardVersion;
			$reg->os=$request->OS;
			$reg->os_platform=$request->OsPlatform;
			$reg->os_version=$request->OsVersion;
			$reg->system_product_name=$request->SystemProductName;
			$reg->system_sku=$request->SystemSKU;
			$reg->code=bcrypt($reg->app_user_id . $reg->system_sku);
			$reg->save();
				
		}
		$code = $reg->code;
		
		if($code){	
		    return response(['Status'=>"Success",'Value'=>$reg->code])->header("Returned","{'Status':'Success','Value':'$reg->code'}");
			
		}else{
			return response(['Status'=>"Failed",'Value'=>null])->header("Returned","{'Status':'Failed','Value':'null'}");
		}
		
	}

	public function register(Request $request)
	{
		//dd(["stop", $request->all()]);
		$this->validate($request, [
			'email'=>'required|email'
		]);

		if(isset($request->new)){

			$value = $this->createAccountAndRegister($request);
			return $value;
		}
		//dd(["stop", $request->all()]);

		$app_user =AppUser::where("email",$request->email)->first();
		if(!$app_user) return ["{'id:0','name:unknown', 'reason:error'"];


		$reg=new Registration;
		$reg->app_user_id=$app_user->id;
		$reg->base_board_version=$request->BaseBoardVersion;
		$reg->os=$request->OS;
		$reg->code=null;
		$reg->os_platform=$request->OsPlatform;
		$reg->os_version=$request->OsVersion;
		$reg->system_product_name=$request->SystemProductName;
		$reg->system_sku=$request->SystemSKU;

		$saved=$reg->save();

		if($saved){
			$reg->code=bcrypt($reg->app_user_id . $reg->system_sku);
			$reg->save();
			return response("{'Status':'Success','Value':'$reg->code'}")->header('Returned',"{'Status':'Success','Value':'$reg->code'}");
			//return response("{'Status': 'Success', 'Value': '$reg->code'}");
		}
		return response("{'id:0','name:unknown', 'reason:error'}");
	}


	public function validateRegistration(Request $request)
	{
		$this->validate($request,[
			'code'=>'required',
			'dte'=>'required'
		]);

		$reg=Registration::where('code',$request->code)->first();
		if($reg){
			return response(["Status"=>"OK","app_user_id"=>$reg->app_user_id,'system_product_name'=>$reg->system_product_name,'code'=>$reg->code]);
		}else{
			return response(['Status'=>"Error",'code'=>null]);
		}
	}
}
