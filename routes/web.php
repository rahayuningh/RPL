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

Route::get('/', function () {
    return view('welcome');
});

//LAYANAN
Route::get('/layanan', 'LayananController@index');
Route::get('/jenis-alat', 'LayananController@alat');
Route::get('/kerusakan', 'LayananController@kerusakan');
Route::get('/keluhan', 'LayananController@keluhan');
Route::get('/jenis-layanan', 'LayananController@jenis');
Route::get('/total-harga', 'LayananController@totalharga');

//KONSULTASI
Route::get('/konsultasi', function () {
    return view('konsultasi');
});
Route::get('/konsultasi', 'CustomerController@index');
Route::post('/konsultasi/create', 'CustomerController@create');

//DATABASE
Route::get('/konsultasi-database', 'CustomerController@konsult');
Route::get('/konsultasi-database/{id}/delete', 'CustomerController@delete');



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
