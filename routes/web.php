<?php
use App\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Clear config cache:
Route::get('/clear', function() {
	$exitconf = Artisan::call('config:clear');
	$exitcache = Artisan::call('cache:clear');
	$exitroute = Artisan::call('route:clear');
	$exitview = Artisan::call('view:clear');
	$exitconf = Artisan::call('config:cache');
	echo 'All cache cleared';
	return redirect()->route('index');
});

Route::get('/get-user', 'SiteController@identifyUser');

Route::get('index2', function(){
	return view('xml');
	return "<h1>This is an AJAX retuned TEXT</h1>";
});

Route::get('index1', function(){
	return view('testHttp');
});

Route::get('/', 'SiteController@index')->name('index');
Route::get('/about', 'SiteController@about')->name('about');
Route::get('/about', 'SiteController@about')->name('about');
Route::get('/downloads', 'SiteController@download')->name('download');
Route::get('/download-prepare', 'SiteController@download')->name('download');
Route::get('/download', 'SiteController@download')->name('download');

Route::post('/validate-email', 'SiteController@sendValidationEmail')->name('email.validate');
Route::get('/email-validated', 'SiteController@fromEmail')->name('email.validated');


Route::get('/register/app-user', 'SiteController@app_user_register')->name('app.user.register');
Route::post('/register/app-user', 'SiteController@app_user_register')->name('app.user.register');
Route::get('/review', 'ReviewController@create')->name('review.create');
Route::get('/review', 'ReviewController@index')->name('review.index');
Route::post('/review', 'ReviewController@save')->name('review.save');


Route::get('/download1', 'SiteController@download1')->name('download1');//->middleware('guest');

Route::get('/download-plus', 'SiteController@downloadPlus')->name('downloadPlus');//

Route::get('/contact-rojex-technology', 'SiteController@contact')->name('contact');
Route::get('/screenshots-of-congregation-secretary-assistant', 'SiteController@screenshots')->name('screenshots');


Route::get('/support', 'SiteController@getFeedBack')->name('support.feedback');
Route::get('/support/feedback/form', 'SiteController@showForm')->name('support.feedback.form');
Route::post('/support', 'SiteController@postFeedBack')->name('feedback');

Route::get('/generate/' ,'SiteController@generateToken');

/*
*	Registration
*/
Route::group(['middleware'=>'regGuard'],function(){
	Route::get('/register-get-code', 'RegController@SendCode');
	Route::post('/validate-registration','RegController@validateRegistration');
	Route::get('/update','SiteController@update')->name('update');
});

Route::get('/register-csa','RegController@register');
Route::post('/register-user-csa','RegController@createAccountAndRegister');

Route::get('/test-reg', function(){
	return "{'Status':'success, 'Value':'UTHFDD'}";
});

//--------------------DONATIONS------------------------->
Route::get('/donate' ,'SiteController@checkout');


Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay'); 
//Route::get('/donate/callback', 'PaymentController@handleGatewayCallback');
//------------------------------------------------->

Route::get('/payment/callback', 'PaymentController@handleGatewayCallback')->name('callback');


Route::post('/webhook/', 'SiteController@webhook')->name('webhook');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


