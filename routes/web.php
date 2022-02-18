<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserdashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('/user', UserdashboardController::class);


Route::resource('/', LoginController::class);
Route::resource('/register', RegisterController::class);