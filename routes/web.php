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
		'uses' => 'UserController@getHome', //UserController@getHome
		'as' => 'home'
	]);

	Route::get('/dashboard', [
		'uses' => 'PostController@getDashboard', // Redirect to userController ang call getDashboard function
		'as' => 'dashboard',
		'middleware' => 'auth'
	]);

	Route::Post('/createpost', [
		'uses' => 'PostController@postCreatePost',
		'as' => 'post.create',
		'middleware' => 'auth'
	]);

	Route::get('/delete-post/{post_id}', [
		'uses' => 'PostController@getDeletePost',
		'as' => 'post.delete',
		'middleware' => 'auth'
	]);
});




Route::get('register', function(){
		return view('register');
})->middleware('auth');


/*
Route::get('home', function (){
	return view('admin/index');
});
*/
Route::get('patients', function (){
	return view('admin/patients');
})->middleware('auth');
Route::get('prescription', function(){
	return view('admin/prescription');
})->middleware('auth');
Route::get('prescriptionAdd', function(){
	return view('admin/prescriptionAdd');
})->middleware('auth');








Route::get('test', 'TestController@index');
