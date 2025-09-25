<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokumentasiTradisiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\GaleriController;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

Route::get('/', function () {
    return view('welcome');
});

// Galeri Budaya (public page)
Route::get('/galeri-budaya', function () {
    return view('galeri-budaya');
})->name('galeri.budaya');

// Galeri Budaya (admin insert)
Route::get('/galeri-budaya-insert',[GaleriController::class, 'index'])->middleware('auth');
Route::post('/galeri-budaya-insert', [GaleriController::class, 'store'])->middleware('auth')->name('galeri-budaya.store');

// Dokumentasi Tradisi (public page)
Route::get('/dokumentasi-tradisi', function () {
    return view('dokumentasi-tradisi');
})->name('dokumentasi.tradisi');

// Dokumentasi Tradisi (admin insert)
Route::get('/dokumentasi-tradisi-insert',[DokumentasiTradisiController::class, 'index'])->middleware('auth');
Route::post('/dokumentasi-tradisi-insert', [DokumentasiTradisiController::class, 'store'])->middleware('auth')->name('dokumentasi-tradisi.store');

// Optional: JSON data endpoints (if needed by FE async)
Route::get('/api/dokumentasi-tradisi', [DokumentasiTradisiController::class, 'getDokumentasiTradisi']);

// Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/admin/login', function () {
    return view('loginadmin');
})->name('admin.login');

// Contact page (public)
Route::get('/contact', function () {
    return view('contact');
})->name('contact');