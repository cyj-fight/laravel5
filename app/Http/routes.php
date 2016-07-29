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

//Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');
Route::get('/', 'HomeController@index');


Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'auth'],function(){
	Route::get('/','AdminHomeController@index');
	Route::resource('pages','PagesController');
	Route::resource('comments','CommentsController');
});

Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');

Route::get('auth/register','Auth\Authcontroller@getRegister');
Route::post('auth/register','Auth\Authcontroller@postRegister');

Route::get('auth/logout','Auth\AuthController@getLogout');

Route::get('pages/{id}','Admin\PagesController@show');
Route::post('comment/store','CommentController@store');