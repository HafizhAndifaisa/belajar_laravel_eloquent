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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('userdetail','App\Http\Controllers\ApiUsersDetailController@index');
Route::post('userdetail','App\Http\Controllers\ApiUsersDetailController@create');
Route::put('/userdetail/{id}','App\Http\Controllers\ApiUsersDetailController@update');
Route::delete('/userdetail/{id}','App\Http\Controllers\ApiUsersDetailController@delete');
Route::get('/userdetail/{id}','App\Http\Controllers\ApiUsersDetailController@detail');