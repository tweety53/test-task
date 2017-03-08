<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'api'], function() {

    Route::get('user/{id}', array('uses' => 'UserController@getProfile'));

    Route::put('user/{id}', array('uses' => 'UserController@setProfile'));

    
});
