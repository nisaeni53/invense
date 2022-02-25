<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserdashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\PermintaanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangPinjamController;
use App\Http\Controllers\LandingController;
use GuzzleHttp\Middleware;
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
//Dashboard
// Route::resource('/', LoginController::class);

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/login', function() {
    return view('authentication.login'); 
})->name('login');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/simpanregister', [RegisterController::class, 'simpanregister'])->name('simpanregister');
// Route::resource('/register', RegisterController::class);


Route::group(['middleware' => ['auth','cekrole:admin']], function () {
    // Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin/dashboard', [DashboardController::class, 'halamansatu'])->name('halamansatu');
    Route::resource('/admin/peminjam', PeminjamController::class);
    Route::resource('/admin/barang', BarangController::class);
    Route::resource('/admin/barangpinjam', BarangPinjamController::class);
    Route::resource('/admin/permintaan', PermintaanController::class);
});

Route::group(['middleware' => ['auth','cekrole:user']], function() {  
    // Route::resource('/user', UserdashboardController::class);
    Route::get('/user/dashboard', [UserdashboardController::class, 'halamandua'])->name('halamandua');
    Route::resource('/user/landing', LandingController::class);
});

