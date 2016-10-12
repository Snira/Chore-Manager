<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Auth::routes();

Route::get('/',['as'=> '/', 'uses' =>'HomeController@index'  ] );

Route::resource('admin', 'UserController');
Route::resource('chores', 'ChoreController');

Route::get('user/create',
    ['as' => 'users.create', 'uses' => 'UserController@create']);
Route::post('user/create',
    ['as' => 'users.create', 'uses' => 'UserController@store']);


