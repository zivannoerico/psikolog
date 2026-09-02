<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DokumentasiVideoRequest;
use App\Models\DokumentasiVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokumentasiVideoController extends Controller
{
    public function index(Request $request)
    {
        $query = DokumentasiVideo::orderBy('urutan');

        if ($request->has('search')) {
            $query->where('judul', 'like', '%' . $request->search . '%');
        }

        $videos = $query->paginate(12)->withQueryString();

        return view('admin.dokumentasi-video.index', compact('videos'));
    }

    public function create()
    {
        return view('admin.dokumentasi-video.create');
    }

    public function store(DokumentasiVideoRequest $request)
    {
        $data = $request->validated();

        $data['aktif'] = $request->has('aktif') ? true : false;

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('dokumentasi-video', 'public');
        }

        DokumentasiVideo::create($data);

        return redirect()->route('admin.dokumentasi-video.index')->with('success', 'Video dokumentasi berhasil ditambahkan.');
    }

    public function edit(DokumentasiVideo $dokumentasi_video)
    {
        return view('admin.dokumentasi-video.edit', ['video' => $dokumentasi_video]);
    }

    public function update(DokumentasiVideoRequest $request, DokumentasiVideo $dokumentasi_video)
    {
        $data = $request->validated();

        $data['aktif'] = $request->has('aktif') ? true : false;

        if ($request->hasFile('thumbnail')) {
            if ($dokumentasi_video->thumbnail && Storage::disk('public')->exists($dokumentasi_video->thumbnail)) {
                Storage::disk('public')->delete($dokumentasi_video->thumbnail);
            }
            $data['thumbnail'] = $request->file('thumbnail')->store('dokumentasi-video', 'public');
        }

        $dokumentasi_video->update($data);

        return redirect()->route('admin.dokumentasi-video.index')->with('success', 'Video dokumentasi berhasil diperbarui.');
    }

    public function destroy(DokumentasiVideo $dokumentasi_video)
    {
        if ($dokumentasi_video->thumbnail && Storage::disk('public')->exists($dokumentasi_video->thumbnail)) {
            Storage::disk('public')->delete($dokumentasi_video->thumbnail);
        }

        $dokumentasi_video->delete();

        return redirect()->route('admin.dokumentasi-video.index')->with('success', 'Video dokumentasi berhasil dihapus.');
    }
}
