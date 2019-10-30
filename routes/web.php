<?php

Route::get('/',  'HomeController@index');

Route::get('/about', 'About@buka_about' );
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// CRUD Berita
Route::get('/history', 'BeritaController@index');

Route::get('/upload', 'BeritaController@tambah');
Route::post('/upload/berita', 'BeritaController@store');
Route::get('/history/edit/{id}', 'BeritaController@edit');
Route::put('/history/update/{id}', 'BeritaController@update');
Route::get('/history/hapus/{id}', 'BeritaController@hapus');
//  ---- End CRUD Berita

Route::group(['prefix' => 'admin'], function(){
	Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.home');
});
