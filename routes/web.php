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

Route::get('/','LayananController@index');

//LAYANAN
Route::get('/layanan', 'LayananController@layanan');
Route::post('/layanan/storeMsg', 'LayananController@storeMsg');
Route::get('/layanan/{id}/delete', 'LayananController@delete');
/*Route::get('/kerusakan', 'LayananController@kerusakan');
Route::get('/keluhan', 'LayananController@keluhan');
Route::get('/jenis-layanan', 'LayananController@jenis');*/
Route::get('/rekap-pesanan', 'LayananController@totalharga');

//KONSULTASI
Route::get('/konsultasi', function () {
    return view('konsultasi');
});
Route::get('/konsultasi', 'CustomerController@index');
Route::post('/konsultasi/create', 'CustomerController@create');

//DATABASE
Route::get('/konsultasi-database', 'CustomerController@konsult');
Route::get('/konsultasi-database/{id}/delete', 'CustomerController@delete');

Route::get('/database-alat', 'LayananController@jenis_alat');
Route::post('/database-alat/create_alat', 'LayananController@create_alat');
Route::get('/database-alat/{id}/delete_alat', 'LayananController@delete_alat');

Route::get('/database-iphone', 'LayananController@iphone');
Route::post('/database-iphone/create_iphone', 'LayananController@create_iphone');
Route::get('/database-iphone/{id}/delete_iphone', 'LayananController@delete_iphone');

Route::get('/teknisi', 'CustomerController@teknisi');
Route::post('/teknisi/create_teknisi', 'CustomerController@create_teknisi');
Route::get('/teknisi/{id}/delete_teknisi', 'CustomerController@delete_teknisi');

Route::get('/customer', 'CustomerController@customer');
Route::post('/customer/create_customer', 'CustomerController@create_customer');
Route::get('/customer/{id}/delete_customer', 'CustomerController@delete_customer');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', function () {
    return view('index');
});

Route::get('/index2', function () {
    return view('index2');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/coba', 'MainController@index');
