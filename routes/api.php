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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1/users'], function() {
  Route::get('/', 'UserController@index');
  Route::get('/{id}', 'UserController@show');
});

Route::group(['prefix' => 'v1/posts'], function() {
  Route::get('/', 'PostController@index');
  Route::get('/{id}', 'PostController@show');
});

Route::group(['prefix' => 'v1/categories'], function() {
  Route::get('/', 'CategoryController@index');
  Route::get('/{id}', 'CategoryController@show');
});

Route::group(['prefix' => 'v1/locations'], function() {
  Route::get('/', 'LocationController@index');
  Route::get('/{id}', 'LocationController@show');
});
