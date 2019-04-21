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

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/jenis-alat', function () {
    return view('layanan-alat');
});

Route::get('/kerusakan', function () {
    return view('layanan-kerusakan');
});

Route::get('/jenis-layanan', function () {
    return view('layanan-jenis');
});

Route::get('/total-harga', function () {
    return view('layanan-total-harga');
});


Route::get('/konsultasi', function () {
    return view('konsultasi');
});

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
