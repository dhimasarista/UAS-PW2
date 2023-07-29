<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarJenisSampah;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\JenisSampahController;
use App\Http\Controllers\ManajemenNasabahController;

// Halaman Utama
Route::get('/', [TransaksiController::class, 'index'])->name("index");
// Manajemen Nasabah
Route::get('/nasabah', [ManajemenNasabahController::class, 'index'])->name('nasabah');
Route::post('/nasabah', [ManajemenNasabahController::class, 'store'])->name('nasabah-store');
// Daftar Jenis Sampah
Route::get('/daftar-jenis-sampah', [DaftarJenisSampah::class, 'index'])->name("daftar-jenis-sampah");
Route::get('/edit/{id}', [JenisSampahController::class, 'edit'])->name('jenis-sampah.edit');
Route::put('/update/{id}', [JenisSampahController::class, 'update'])->name('jenis-sampah.update');