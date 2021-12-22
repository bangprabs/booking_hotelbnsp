<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;


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

Route::get('/', 'App\Http\Controllers\IndexController@index');
Route::get('/produk', 'App\Http\Controllers\IndexController@produk');
Route::get('/daftar-harga', 'App\Http\Controllers\IndexController@daftarHarga');
Route::get('/tentang-kami', 'App\Http\Controllers\IndexController@kontak');
Route::match(['get', 'post'], 'pesan-kamar/{id?}', 'App\Http\Controllers\PesanKamarController@tambahEditDataPelanggan');
Route::get('/daftar-pelanggan', 'App\Http\Controllers\IndexController@daftarPelanggan');
Route::get('hapus-pelanggan/{id}','App\Http\Controllers\IndexController@hapusPelanggan');
Route::get('detail-pelanggan/{id}','App\Http\Controllers\IndexController@detailPelanggan');


// Route::get('/login', [LoginController::class, 'login'])->name('login');
// Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
