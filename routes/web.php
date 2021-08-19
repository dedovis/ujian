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

Route::get('/', 'UjianController@index')
    ->name('ujian_index');
    Route::get('/create', 'UjianController@create')
    ->name('ujian_create');
Route::post('/store', 'UjianController@store')
    ->name('ujian_tambah');
Route::get('/edit/{id}', 'UjianController@show')
    ->name('ujian_edit');
Route::put('/edit/{id}', 'UjianController@update')
    ->name('ujian_update');
Route::get('/hapus/{id}', 'UjianController@delete')
    ->name('ujian_hapus');
Route::get('/cetak', 'UjianController@cetak')
    ->name('cetak');
