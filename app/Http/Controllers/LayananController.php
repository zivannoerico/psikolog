<?php

namespace App\Http\Controllers;

use App\Models\KategoriLayanan;
use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $kategori = KategoriLayanan::with(['layanan' => fn($q) => $q->aktif()])->orderBy('urutan')->get();
        $layanan  = Layanan::aktif()->with('kategori')->get();

        return view('layanan.index', compact('kategori', 'layanan'));
    }

    public function show(Layanan $layanan)
    {
        if (!$layanan->aktif) {
            abort(404);
        }

        $semuaLayanan = Layanan::aktif()->with('kategori')->get();

        return view('layanan.show', compact('layanan', 'semuaLayanan'));
    }
}
