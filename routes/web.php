<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DataKamarController;
use App\Http\Controllers\DataReservasiController;
use App\Http\Controllers\FasilitasHotelController;
use App\Http\Controllers\FasilitasKamarController;
use App\Http\Controllers\PemesananController;


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
    return view('home');
});

Route::get('/kamar', function () {
    return view('kamar');
});

Route::get('/fasilitas', function () {
    return view('fasilitas');
});

Route::get('/loginadmin', function () {
    return view('loginadmin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/cetak', [App\Http\Controllers\PemesananController::class, 'cetakBukti'])->name('cetak');

Route::resource('/form', PemesananController::class);

Route::resource('dataKamar', DataKamarController::class);
Route::resource('fasilitasHotel', FasilitasHotelController::class);
Route::resource('fasilitasKamar', FasilitasKamarController::class);
Route::resource('dataReservasi', DataReservasiController::class);

Auth::routes();
Route::get('/dataKamar', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin.home')->middleware('is_admin');
Route::get('/dataReservasi', [App\Http\Controllers\HomeController::class, 'resepsionis'])->name('home');