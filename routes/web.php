<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('kategori', KategoriController::class);
Route::resource('buku', BukuController::class);

Route::get('buku/jumlah', [BukuController::class, 'jumlah'])->name('buku.jumlah');
Route::get('buku/perkategori', [BukuController::class, 'perkategori'])->name('buku.perkategori');

Route::get('/kategori/{id}/buku', [KategoriController::class, 'daftarBukuPerKategori'])->name('kategori.daftarbuku');

// Route for displaying the login form
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Route for handling the login form submission
Route::post('/loginprocess', [AuthController::class, 'loginProcess'])->name('login.process');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


