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


Route::get('mahasiswa/read', 'MhsApiController@read');
Route::post('mahasiswa/create', 'MhsApiController@create');
Route::post('/mahasiswa/update/{id}', 'MhsApiController@create');
Route::delete('/mahasiswa/delete/{id}', 'MhsAPIController@delete');


Route::get('task/read', 'TAskAPIController@read');
Route::post('task/create', 'TAskAPIController@create');
Route::post('/task/update/{id}', 'TAskAPIController@create');
Route::delete('/task/delete/{id}', 'TAskAPIController@delete');