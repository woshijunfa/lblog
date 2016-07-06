<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

#主页介绍相关
Route::get('/', 'CopyController@index');

//登录注册相关
Route::get('/users/sign_in', 'CopyController@common');
Route::get('/users/sign_up', 'CopyController@common');
Route::post('/register',"UserController@regiestPost");
Route::post('/login',"UserController@loginPost");
Route::post('/setLoginPass',"UserController@setLoginPass");
Route::post('/resetPassEmail',"UserController@resetPassEmail");
Route::get('/logout',"UserController@logout");


Route::get('/test','TestController@test');
//auto-generate-route
Route::group(['middleware'=>'auth'], function () {

});


