<?php

use Illuminate\Support\Facades\Route;

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

	// SURAT
	Route::get('/surat', 'SuratController@index');
	Route::get('/tambah-surat', 'SuratController@create');
	Route::post('/do-add-surat', 'SuratController@store');
	Route::get('/detail-surat/{id}', 'SuratController@show');
	Route::post('/do-update-surat/{id}', 'SuratController@update');
	Route::get('/delete-surat/{id}', 'SuratController@destroy');
	Route::get('/unduh-surat/{id}', 'SuratController@unduh');

	// ABOUT
	Route::get('/about', 'SuratController@about');
	
	

