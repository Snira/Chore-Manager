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





Route::group([ 'middleware' => 'auth' ], function () {
    //These are the routes you can only visit when logged in
    Route::get('/', [ 'as' => '/', 'uses' => 'HomeController@index' ]);
    Route::get('profile', [ 'as' => 'profile', 'uses' => 'UserController@profile' ]);

    //All the management stuff is done by an Administrator
    Route::group([ 'middleware' => 'admin' ], function () {
        //User related
        Route::get('user', [ 'as' => 'user', 'uses' => 'UserController@index' ]);
        Route::get('user/create', [ 'as' => 'user.create', 'uses' => 'UserController@create' ]);
        Route::post('user/create', [ 'as' => 'user.create', 'uses' => 'UserController@store' ]);

        Route::get('user/delete/{user}', [ 'as' => 'user.destroy', 'uses' => 'UserController@destroy' ]);
        Route::get('user/activity/{user}', [ 'as' => 'user.activity', 'uses' => 'UserController@activity' ]);

        Route::post('user/filtered', [ 'as' => 'user.filtered', 'uses' => 'UserController@filtered' ]);

        //Chore related
        Route::get('chore', [ 'as' => 'chore', 'uses' => 'ChoreController@index' ]);
        Route::get('chore/create', [ 'as' => 'chore.create', 'uses' => 'ChoreController@create' ]);
        Route::post('chore/create', [ 'as' => 'chore.create', 'uses' => 'ChoreController@store' ]);

        Route::get('chore/delete/{chore}', [ 'as' => 'chore.destroy', 'uses' => 'ChoreController@destroy' ]);
    });


});





