<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Faq;
use App\Models\Layanan;
use App\Models\Setting;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $layanan    = Layanan::aktif()->with('kategori')->take(7)->get();
        $testimoni  = Testimoni::aktif()->take(6)->get();
        $artikel    = Artikel::published()->take(3)->get();
        $faq        = Faq::aktif()->take(5)->get();

        return view('welcome', compact('layanan', 'testimoni', 'artikel', 'faq'));
    }
}
