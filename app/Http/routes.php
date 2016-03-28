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

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('index');
    });
	
    //Route::get('/', 'RandomController@getText');
    Route::get('/text', 'RandomController@getText');
    Route::post('/text', 'RandomController@postText');
    Route::get('/user', 'RandomController@getUser');
    Route::post('/user', 'RandomController@postUser');
});
