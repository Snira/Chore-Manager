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

Route::get('/', [ 'as' => '/', 'uses' => 'HomeController@index' ]);

Route::resource('chores', 'ChoreController');

Route::group([ 'middleware' => 'auth' ], function () {

    //User related
    Route::get('user', [ 'as' => 'user', 'uses' => 'UserController@index' ]);
    Route::get('user/create', [ 'as' => 'user.create', 'uses' => 'UserController@create' ]);
    Route::post('user/create', [ 'as' => 'user.create', 'uses' => 'UserController@store' ]);

    Route::get('user/delete/{user}', [ 'as' => 'user.destroy', 'uses' => 'UserController@destroy' ]);
    Route::get('user/activity/{user}', [ 'as' => 'user.activity', 'uses' => 'UserController@activity' ]);

    //Chore related
    Route::get('chore', [ 'as' => 'chore', 'uses' => 'ChoreController@index' ]);
    Route::get('chore/create', [ 'as' => 'chore.create', 'uses' => 'ChoreController@create' ]);
    Route::post('chore/create', [ 'as' => 'chore.create', 'uses' => 'ChoreController@store' ]);

    Route::get('chore/delete/{chore}', [ 'as' => 'chore.destroy', 'uses' => 'ChoreController@destroy' ]);
});




