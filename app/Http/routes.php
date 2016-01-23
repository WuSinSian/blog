<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //throw new Exception("ths is work");
      //return "welcome";
    return view('welcome');
});

Route::get('hello/{name?}',function($name ='who are you'){

	return 'hello  '.$name;
});

//Route::pattern('id','[0-9]+');
Route::get('post/{id?}',['as' => 'posts.show', function($id =0 ){

	return 'ID =   '. $id;
}])
->where ('id','[0-9]+');

Route::get('dashboard',function(){
		return 'user dashboard';
	});

Route::group(['prefix' => 'admin'],function(){

	Route::get('dashboard',function(){
		return 'admin dashboard';
	});
	Route::get('account',function(){
		return 'admin account';
	});
});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
