<?php

namespace App\Http\Controllers;

use App\Models\DokumentasiVideo;
use App\Models\Galeri;
use Illuminate\Http\Request;

class DokumentasiController extends Controller
{
    /**
     * Ringkasan Dokumentasi (Overview Page)
     */
    public function index()
    {
        $fotos  = Galeri::aktif()->take(6)->get();
        $videos = DokumentasiVideo::aktif()->take(3)->get();

        return view('dokumentasi.index', compact('fotos', 'videos'));
    }

    /**
     * Halaman Khusus Galeri Foto
     */
    public function foto()
    {
        $fotos = Galeri::aktif()->paginate(12);

        return view('dokumentasi.foto', compact('fotos'));
    }

    /**
     * Halaman Khusus Dokumentasi Video
     */
    public function video()
    {
        $videos = DokumentasiVideo::aktif()->paginate(9);

        return view('dokumentasi.video', compact('videos'));
    }
}
