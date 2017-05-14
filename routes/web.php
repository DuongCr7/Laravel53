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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', ['as' => 'admin.login', 'uses' => 'Admin\LoginController@login']);
Route::post('/login', ['as'=>'admin.login', 'uses'=>'Admin\LoginController@postLogin']);
Route::post('/logout', ['as' =>'admin.logout', 'uses' => 'Admin\LoginController@logout']);

Route::group(['middleware' => ['auth:admin', 'xss']], function(){
	Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function (){

		Route::get('/dashboard', ['as' => 'admin.dashboard', 'uses' => 'DashboardController@index']);


		Route::group(['prefix' => 'user'], function (){
			Route::get('/', ['as' => 'admin.user.list', 'uses'=>'UserController@index']);
			Route::get('/create', ['as' =>'admin.user.create', 'uses' => 'UserController@create']);
			Route::post('/create', ['as' => 'admin.user.create', 'uses' => 'UserController@store']);
		});
	});
});