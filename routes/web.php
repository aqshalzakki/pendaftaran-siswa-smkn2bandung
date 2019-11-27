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

Route::get('/', 'PagesController@home')->name('home');
Route::get('/jurusan/', 'PagesController@jurusan')->name('pages.jurusan');

// Custom Authentication

	Route::get('/login', 'Auth\LoginController@loginNisnForm')->name('login.nisn');
	Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
// ---------------------

// CalonSiswa group and middleware

Route::prefix('calon-siswa')	
	 ->name('calon-siswa.')
     ->middleware(['UserLoggedIn'])
     ->group(function(){
		Route::get('/', 'CalonSiswaController@index')->name('index');
		Route::get('/biodata', 'CalonSiswaController@show')->name('biodata');
		Route::get('/edit-biodata', 'CalonSiswaController@edit')->name('edit');
		Route::get('/berkas-lampiran', 'CalonSiswaController@berkasLampiran')->name('berkas');
	  });

// ----------