<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\TimController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes — An Moerty Psikologi Banyuwangi
|--------------------------------------------------------------------------
*/

// === FRONTEND ===
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/tentang-kami', [AboutController::class, 'index'])->name('tentang');

Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index');
Route::get('/layanan/{layanan:slug}', [LayananController::class, 'show'])->name('layanan.show');

Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/artikel/{artikel:slug}', [ArtikelController::class, 'show'])->name('artikel.show');

// Backward compat for /berita route
Route::redirect('/berita', '/artikel');

Route::get('/hubungi', [KontakController::class, 'index'])->name('kontak.index');
Route::post('/hubungi', [KontakController::class, 'kirim'])->name('kontak.kirim');

Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni.index');

Route::get('/tim-psikolog', [TimController::class, 'index'])->name('tim.index');
