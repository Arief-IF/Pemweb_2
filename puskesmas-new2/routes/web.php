<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda' , function(){
    return "Halaman Beranda";
});

Route::get('/salam', function(){
    return "Selamat Datang Arief Ichwan Fanani di laravel 11";
});

Route::get('/profile' ,function(){
    return "Halaman Profile";
});

// Praktikum Laravel 2

Route::get('/dashboard' ,[AdminController::class, 'index']);
Route::get('/contact' ,[ContactController::class, 'contact']);
Route::get('/about' ,[AboutController::class, 'about']);

Route::get('/service',[ServiceController::class,'service']);

// Praktikum Laravel 3

Route::get('/dashboard/kelurahan', [KelurahanController::class, 'index']);
Route::get('/dashboard/pasien',[PasienController::class, 'index']);

// Praktikum Laravel 4
Route::get('/dashboard/kelurahan/create', [KelurahanController::class, 'create']);
Route::POST('/dashboard/kelurahan/store', [KelurahanController::class, 'store']);
Route::get('/dashboard/kelurahan/show/{id}', [KelurahanController::class, 'show']);

Route::get('/dashboard/pasien/create', [PasienController::class, 'create']);
Route::POST('/dashboard/pasien/store', [PasienController::class, 'store']);
Route::get('/dashboard/pasien/show/{id}', [PasienController::class, 'show']);