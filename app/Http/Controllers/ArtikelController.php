<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\KategoriArtikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        $query = Artikel::published()->with('kategori');

        // Search
        if ($request->filled('q')) {
            $q = $request->q;
            $query->where(function ($builder) use ($q) {
                $builder->where('judul', 'like', "%{$q}%")
                        ->orWhere('excerpt', 'like', "%{$q}%")
                        ->orWhere('konten', 'like', "%{$q}%");
            });
        }

        // Filter kategori
        if ($request->filled('kategori')) {
            $query->whereHas('kategori', fn($b) => $b->where('slug', $request->kategori));
        }

        $artikel  = $query->paginate(9)->withQueryString();
        $kategori = KategoriArtikel::withCount(['artikel' => fn($q) => $q->published()])->get();

        return view('berita', compact('artikel', 'kategori'));
    }

    public function show(Artikel $artikel)
    {
        if ($artikel->status !== 'published') {
            abort(404);
        }

        $artikel->incrementViews();

        $related = Artikel::published()
            ->where('id', '!=', $artikel->id)
            ->where('kategori_artikel_id', $artikel->kategori_artikel_id)
            ->take(3)
            ->get();

        return view('berita-detail', compact('artikel', 'related'));
    }
}
