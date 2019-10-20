<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', 'About@buka_about' );
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// CRUD Berita
Route::get('/history', 'BeritaController@index');

Route::get('/upload', 'BeritaController@tambah');
Route::post('/upload/berita', 'BeritaController@store');
//  ---- End CRUD Berita

Route::group(['prefix' => 'admin'], function(){
	Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.home');
});

