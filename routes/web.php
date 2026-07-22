<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hubungi', function () {
    return view('contact');
});

Route::get('/tentang-kami', function () {
    return view('about');
});

Route::get('/berita', function () {
    return view('berita');
});

// Layanan Routes
Route::get('/layanan/psikotes', function () { return view('layanan.psikotes'); });
Route::get('/layanan/interview', function () { return view('layanan.interview'); });
Route::get('/layanan/fgd', function () { return view('layanan.fgd'); });
Route::get('/layanan/konseling-kerja', function () { return view('layanan.konseling-kerja'); });
Route::get('/layanan/konseling-masalah', function () { return view('layanan.konseling-masalah'); });
Route::get('/layanan/training-indoor', function () { return view('layanan.training-indoor'); });
Route::get('/layanan/training-outdoor', function () { return view('layanan.training-outdoor'); });
