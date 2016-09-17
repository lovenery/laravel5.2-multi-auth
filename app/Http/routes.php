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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

//
Route::get('admin/login', 'Admin\LgoinController@getLogin');
Route::post('admin/login', 'Admin\LgoinController@postLogin');
Route::get('admin/register', 'Admin\LgoinController@getRegister');
Route::post('admin/register', 'Admin\LgoinController@postRegister');
Route::post('admin/logout', 'Admin\LgoinController@logout');
Route::get('admin', 'Admin\IndexController@index');
