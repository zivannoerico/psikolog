<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\DokumentasiVideo;
use App\Models\Faq;
use App\Models\Galeri;
use App\Models\Layanan;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $layanan    = Layanan::aktif()->with('kategori')->take(6)->get();
        $testimoni  = Testimoni::aktif()->take(6)->get();
        $artikel    = Artikel::published()->take(3)->get();
        $faq        = Faq::aktif()->take(5)->get();
        $galeri     = Galeri::aktif()->take(6)->get();
        $dokVideo   = DokumentasiVideo::aktif()->take(3)->get();

        return view('frontend-home', compact('layanan', 'testimoni', 'artikel', 'faq', 'galeri', 'dokVideo'));
    }
}

