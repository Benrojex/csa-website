<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;

class ApiController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:api');
    }
    
   	public function identifyUser(Request $request){

   		$app= \RojexApp::where('code',$request->program_code)->first();
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

	 	if(isset($appUser[0])){
			return $appUser[0]->toJson();
		}else{
			return '{"id":0,"reason":"keyError"}';
		}
	}


	/*public function identifyUser(Request $request){

	  $appUser= User::join('app_users','users.email','=','app_users.email')
	  ->select('users.id','users.name','users.surname','users.email','users.api_token','app_users.phone')
	  ->where('users.api_token','=',"$request->api_token")->get();

	  if(isset($appUser[0])){
	   return $appUser[0]->toJson();
	  }else{
	    return '{"id":0,"reason":"keyError"}';
	  }
	}*/

	

	public function getVersion(Request $request)
	{

		return $request->user()->except('api_token');
		$file=Storage::disk('public')->download('csaVersion.xml');
		//return $file;
		//return response()->download($file);			
	}

	public function getInstaller(Request $request)
	{
		//Storage::disk('public')->setVisibility('setup.msi','private');
		if($request->api_token) dd('Null');
		$visible=Storage::disk('public')->getVisibility('Setup.msi');
		
		return Storage::disk('public')->allFiles();
				
	}


	public function downloadUpdate(Request $request)
	{
		$file=Storage::disk('public')->download('Setup.msi');
		return $file->stream();			
	}
}
