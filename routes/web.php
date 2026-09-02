<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DokumentasiController;
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

Route::get('/dokumentasi', [DokumentasiController::class, 'index'])->name('dokumentasi.index');
Route::get('/dokumentasi/foto', [DokumentasiController::class, 'foto'])->name('dokumentasi.foto');
Route::get('/dokumentasi/video', [DokumentasiController::class, 'video'])->name('dokumentasi.video');

Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin', function () {
    return redirect()->route('dashboard');
})->middleware(['auth', 'verified']);

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('artikel', \App\Http\Controllers\Admin\ArtikelController::class);
    Route::resource('layanan', \App\Http\Controllers\Admin\LayananController::class);
    Route::resource('testimoni', \App\Http\Controllers\Admin\TestimoniController::class);
    Route::resource('faq', \App\Http\Controllers\Admin\FaqController::class);
    Route::resource('galeri', \App\Http\Controllers\Admin\GaleriController::class);
    Route::resource('dokumentasi-video', \App\Http\Controllers\Admin\DokumentasiVideoController::class);
});

require __DIR__.'/auth.php';

