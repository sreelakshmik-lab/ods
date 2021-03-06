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
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('createuser/','designController@create_user');
Route::post('userlogin/','designController@user_login');
Route::post('createdesigner/','designController@create_designer');
Route::post('designs/','designsController@designupload');
Route::post('userview/','UserviewController@userview');
