<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
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

Route::get('/beranda', function () {
    return view('Halaman Beranda');
});

Route::get('/salam', function () {
    return view('Selamat datang Arief di Laravel 11');
});

Route::get('/profile/thooriq', function () {
    return view('Halaman Profile');
});

//praktikum laravel 2
Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
