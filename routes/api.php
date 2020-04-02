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

Route::get('posts', 'PostsController@index');
Route::get('posts/{id}', 'PostsController@show');
Route::post('posts', 'PostsController@store');
Route::put('posts', 'PostsController@store');
Route::delete('posts/{id}', 'PostsController@destroy');

