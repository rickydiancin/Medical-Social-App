<?php

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

Route::get('login', function(){
		return view('login');
});

Route::group(['middleware' => ['web']], function() {
	Route::get('/', function(){
		return view('login');
	});

	Route::post('/register', [
		'uses' => 'UserController@postSignUp',
		'as' => 'register'
	]);

	Route::post('/login', [
		'uses' => 'UserController@postSignIn',
		'as' => 'login'
	]);


	Route::get('home', [
		'uses' => 'UserController@getHome',
		'as' => 'home'
	]);
});




Route::get('register', function(){
		return view('register');
});


/*
Route::get('home', function (){
	return view('admin/index');
});
*/
Route::get('patients', function (){
	return view('admin/patients');
});
Route::get('prescription', function(){
	return view('admin/prescription');
});
Route::get('prescriptionAdd', function(){
	return view('admin/prescriptionAdd');
});

Route::get('test', 'TestController@index');
