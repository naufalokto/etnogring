<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokumentasiTradisiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

Route::get('/', function () {
    return view('welcome');
});

//Galeri Budaya
Route::get('/galeri-budaya', function () {
    return view('galeri-budaya');
})->name('galeri.budaya');
Route::get('/galeri-budaya-insert',[GaleriController::class, 'index']);
Route::post('/galeri-budaya-insert', [GaleriController::class, 'store'])->name('galeri-budaya.store');

//Dokumentasi Tradisi
Route::get('/dokumentasi-tradisi', function () {
    return view('dokumentasi-tradisi');
})->name('dokumentasi.tradisi');
Route::get('/dokumentasi-tradisi', [DokumentasiTradisiController::class, 'getDokumentasiTradisi'])->name('dokumentasi.tradisi');
Route::get('/dokumentasi-tradisi-insert',[DokumentasiTradisiController::class, 'index']);
Route::post('/dokumentasi-tradisi-insert', [DokumentasiTradisiController::class, 'store'])->name('dokumentasi-tradisi.store');



//Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware(VerifyCsrfToken::class);
Route::post('/login', [LoginController::class, 'login'])->withoutMiddleware(VerifyCsrfToken::class);
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/admin/login', function () {
    return view('loginadmin');
})->name('admin.login');