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
Route::get('/profile', 'PageController@profile');
Route::get('/mahasiswa', 'PageController@mahasiswa');
Route::get('/contact', 'PageController@contact');
Route::get('/user', 'AuthController@user');
Route::get('/user/formadd', 'AuthController@tambahuser');
Route::get('/logout', 'AuthController@logout');
Route::post('/user/simpanuser', 'AuthController@simpanuser');
Route::post('/user/ceklogin', 'AuthController@ceklogin')->middleware('guest');

Route::get('/login', 'AuthController@login')->middleware('guest')->name('login');

Route::get('/mahasiswa/search', 'PageController@search');
Route::get('/mahasiswa/formadd', 'PageController@tambah');
Route::get('/mahasiswa/formedit/{id}', 'PageController@formedit');
Route::post('/mahasiswa/save', 'PageController@save');
Route::put('/mahasiswa/update/{id}', 'PageController@update');
Route::get('/mahasiswa/delete/{id}', 'PageController@delete');

Route::get('/userr', 'AuthController@tambahuserr');
Route::post('/userr/simpanuserr', 'AuthController@simpanuserr');