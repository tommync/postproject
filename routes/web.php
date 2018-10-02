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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','Dashboard@index')->name('dashboard');

Route::resource('produk', 'Produk');
Route::get('/produk', 'Produk@index')->name('produk');

Route::resource('toko', 'Toko');
Route::get('/toko', 'Toko@index')->name('toko');

Route::resource('laporan', 'Laporan');
Route::get('/laporan', 'Laporan@index')->name('laporan');

Route::resource('dashboard', 'Dashboard');
Route::get('/dashboard', 'Dashboard@index')->name('dashboard');