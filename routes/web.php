<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index', function(){
     return view('index');
});

Route::get('/', 'PageController@home');
Route::get('/profile', 'PageController@profile')->middleware('auth');
Route::get('/mahasiswa', 'PageController@mahasiswa')->middleware('auth');
Route::get('/contact', 'PageController@contact')->middleware('auth');
Route::get('/user', 'AuthController@user')->middleware('auth');
Route::get('/user/formadd', 'AuthController@tambahuser')->middleware('auth');
Route::get('/logout', 'AuthController@logout')->middleware('auth');
Route::post('/user/simpanuser', 'AuthController@simpanuser')->middleware('auth');
Route::post('/user/ceklogin', 'AuthController@ceklogin')->middleware('guest');

Route::get('/login', 'AuthController@login')->middleware('guest')->name('login');

Route::get('/mahasiswa/search', 'PageController@search')->middleware('auth');
Route::get('/mahasiswa/formadd', 'PageController@tambah')->middleware('auth');
Route::get('/mahasiswa/formedit/{id}', 'PageController@formedit')->middleware('auth');
Route::post('/mahasiswa/save', 'PageController@save')->middleware('auth');
Route::put('/mahasiswa/update/{id}', 'PageController@update')->middleware('auth');
Route::get('/mahasiswa/delete/{id}', 'PageController@delete')->middleware('auth');

Route::get('/userr', 'AuthController@tambahuserr');
Route::post('/userr/simpanuserr', 'AuthController@simpanuserr');