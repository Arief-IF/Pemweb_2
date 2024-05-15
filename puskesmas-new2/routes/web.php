<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return "Halaman Beranda Laraval 11";
});

Route::get('/salam', function () {
    return "Selamat Datang Arief Ichwan Fanani di Laravel 11 diMatkul Pemrograman Web";
});

Route::get('/profile', function () {
    return "Halaman Profile Arief Ichwan Fanani";
});
