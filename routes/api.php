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
Route::get('/news/{id?}', 'App\Http\Controllers\NewsController@index');
Route::post('/news', 'App\Http\Controllers\NewsController@store');
Route::post('/news/{id}', 'App\Http\Controllers\NewsController@update');
Route::delete('/news/{id}', 'App\Http\Controllers\NewsController@destroy');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
