<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ArtikelRequest;
use App\Models\Artikel;
use App\Models\KategoriArtikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        $query = Artikel::with('kategori')->latest();

        if ($request->has('search')) {
            $query->where('judul', 'like', '%' . $request->search . '%');
        }

        $artikels = $query->paginate(10)->withQueryString();

        return view('admin.artikel.index', compact('artikels'));
    }

    public function create()
    {
        $kategoris = KategoriArtikel::all();
        return view('admin.artikel.create', compact('kategoris'));
    }

    public function store(ArtikelRequest $request)
    {
        $data = $request->validated();
        
        if ($request->has('tags') && !empty($data['tags'])) {
            $data['tags'] = array_map('trim', explode(',', $data['tags']));
        } else {
            $data['tags'] = [];
        }

        if ($request->hasFile('gambar_utama')) {
            $data['gambar_utama'] = $request->file('gambar_utama')->store('artikel', 'public');
        }

        Artikel::create($data);

        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil ditambahkan.');
    }

    public function edit(Artikel $artikel)
    {
        $kategoris = KategoriArtikel::all();
        return view('admin.artikel.edit', compact('artikel', 'kategoris'));
    }

    public function update(ArtikelRequest $request, Artikel $artikel)
    {
        $data = $request->validated();

        if ($request->has('tags') && !empty($data['tags'])) {
            $data['tags'] = array_map('trim', explode(',', $data['tags']));
        } else {
            $data['tags'] = [];
        }

        if ($request->hasFile('gambar_utama')) {
            if ($artikel->gambar_utama && Storage::disk('public')->exists($artikel->gambar_utama)) {
                Storage::disk('public')->delete($artikel->gambar_utama);
            }
            $data['gambar_utama'] = $request->file('gambar_utama')->store('artikel', 'public');
        }

        $artikel->update($data);

        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy(Artikel $artikel)
    {
        // Bug yang sebelumnya muncul karena format string pada action filament kini aman
        // karena ini adalah direct controller deletion.
        $artikel->delete();
        
        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
