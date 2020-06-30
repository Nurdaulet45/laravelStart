<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::apiResource('user', 'Api\UserController')->middleware('auth');
Route::apiResource('user', 'Api\UserController');
Route::get('profile', 'Api\UserController@profile');
Route::get('findUser', 'Api\UserController@search');
Route::put('profile', 'Api\UserController@updateProfile');

Route::post('test', 'Api\UserController@test');
Route::get('test2', 'Api\UserController@test2');
