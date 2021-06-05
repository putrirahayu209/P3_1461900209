<?php

use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\BarangController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Transaksi0209', 'App\Http\Controllers\TransaksiController@index');
Route::resource('/Barang0209', BarangController::class);
Route::get('/Barang0209', 'App\Http\Controllers\BarangController@index');