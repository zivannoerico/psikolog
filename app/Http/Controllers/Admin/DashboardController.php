<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Layanan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_artikel' => Artikel::count(),
            'artikel_published' => Artikel::where('status', 'published')->count(),
            'total_layanan' => Layanan::count(),
            'layanan_aktif' => Layanan::where('aktif', true)->count(),
        ];

        $artikelTerbaru = Artikel::latest()->take(5)->get();

        return view('dashboard', compact('stats', 'artikelTerbaru'));
    }
}
