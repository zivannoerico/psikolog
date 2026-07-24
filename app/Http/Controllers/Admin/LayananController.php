<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LayananRequest;
use App\Models\Layanan;
use App\Models\KategoriLayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    public function index(Request $request)
    {
        $query = Layanan::with('kategori')->orderBy('urutan');

        if ($request->has('search')) {
            $query->where('nama', 'like', '%' . $request->search . '%');
        }

        $layanans = $query->paginate(10)->withQueryString();

        return view('admin.layanan.index', compact('layanans'));
    }

    public function create()
    {
        $kategoris = KategoriLayanan::all();
        return view('admin.layanan.create', compact('kategoris'));
    }

    public function store(LayananRequest $request)
    {
        $data = $request->validated();
        
        $data['aktif'] = $request->has('aktif') ? true : false;
        
        // Convert multiline text to array for manfaat & proses
        if ($request->has('manfaat') && !empty($data['manfaat'])) {
            $data['manfaat'] = array_filter(array_map('trim', explode("\n", $data['manfaat'])));
        } else {
            $data['manfaat'] = [];
        }

        if ($request->has('proses') && !empty($data['proses'])) {
            $data['proses'] = array_filter(array_map('trim', explode("\n", $data['proses'])));
        } else {
            $data['proses'] = [];
        }

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('layanan', 'public');
        }

        Layanan::create($data);

        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil ditambahkan.');
    }

    public function edit(Layanan $layanan)
    {
        $kategoris = KategoriLayanan::all();
        return view('admin.layanan.edit', compact('layanan', 'kategoris'));
    }

    public function update(LayananRequest $request, Layanan $layanan)
    {
        $data = $request->validated();

        $data['aktif'] = $request->has('aktif') ? true : false;

        // Convert multiline text to array for manfaat & proses
        if ($request->has('manfaat') && !empty($data['manfaat'])) {
            $data['manfaat'] = array_filter(array_map('trim', explode("\n", $data['manfaat'])));
        } else {
            $data['manfaat'] = [];
        }

        if ($request->has('proses') && !empty($data['proses'])) {
            $data['proses'] = array_filter(array_map('trim', explode("\n", $data['proses'])));
        } else {
            $data['proses'] = [];
        }

        if ($request->hasFile('gambar')) {
            if ($layanan->gambar && Storage::disk('public')->exists($layanan->gambar)) {
                Storage::disk('public')->delete($layanan->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('layanan', 'public');
        }

        $layanan->update($data);

        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil diperbarui.');
    }

    public function destroy(Layanan $layanan)
    {
        if ($layanan->gambar && Storage::disk('public')->exists($layanan->gambar)) {
            Storage::disk('public')->delete($layanan->gambar);
        }
        
        $layanan->delete();
        
        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil dihapus.');
    }
}
