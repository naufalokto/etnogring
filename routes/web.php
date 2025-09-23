<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/galeri-budaya', function () {
    return view('galeri-budaya');
})->name('galeri.budaya');

Route::get('/dokumentasi-tradisi', function () {
    return view('dokumentasi-tradisi');
})->name('dokumentasi.tradisi');
