<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserdashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PermintaanAdminController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\PermintaanController;
use App\Http\Controllers\DpermintaanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangPinjamController;
use App\Http\Controllers\Inventaris;
use App\Http\Controllers\PembalikanController;
use App\Http\Controllers\ProfiluserController;
use App\Http\Controllers\SettingUserController;
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
Route::get('/', function() {
    return view('authentication.login'); 
})->name('login');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/simpanregister', [RegisterController::class, 'simpanregister'])->name('simpanregister');
// Route::resource('/register', RegisterController::class);
Route::resource('barang', BarangController::class);
// Route::get('/coba', function(){
//     return view('user.forminven');
// });

// Route::get('/coba3', function(){
//     return view('user.pembalikan');
// });
// Route::get('/coba4', function(){
//     return view('user.setting');
// });


Route::group(['middleware' => ['auth','cekrole:admin']], function () {

    // Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin/dashboard', [DashboardController::class, 'halamansatu'])->name('halamansatu');
    Route::resource('/admin/peminjam', PeminjamController::class);
    Route::resource('/admin/barang', BarangController::class);
    Route::resource('/admin/barangpinjam', BarangPinjamController::class);
<<<<<<< HEAD
    Route::resource('/admin/permintaan', DpermintaanController::class);
=======
    Route::resource('/admin/dpermintaan', PermintaanAdminController::class);
    // Route::resource('/admin/permintaan', PermintaanController::class);
>>>>>>> 917cd8dd608743aeb617a4bdc06e16d47d1d05e9
    Route::resource('barang', BarangController::class);
    Route::get('/admin/profil', function(){
        return view('admin.profil');
    });
});


Route::group(['middleware' => ['auth','cekrole:user']], function() {  
    // Route::resource('/user', UserdashboardController::class);
    Route::get('/user/dashboard', [UserdashboardController::class, 'halamandua'])->name('halamandua');
    Route::resource('/user/peminjaman', Inventaris::class);
    Route::resource('/user/pengembalian', PembalikanController::class);
    Route::resource('/user/setting', SettingUserController::class);
    Route::get('/user/peminjaman/create/{id}', [Inventaris::class, 'peminjaman']);
    // Route::get('/user/profil', function(){
    //     return view('user.profil');
    // });
    Route::resource('/user/profil', ProfiluserController::class);
    Route::resource('/user/permintaan', PermintaanController::class);
    Route::get('/user/landing', function(){
        return view('user.landing');
    });
}); 

