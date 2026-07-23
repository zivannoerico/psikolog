<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function kirim(Request $request)
    {
        $validated = $request->validate([
            'nama'    => 'required|string|max:100',
            'email'   => 'required|email|max:150',
            'telepon' => 'nullable|string|max:20',
            'subjek'  => 'nullable|string|max:200',
            'pesan'   => 'required|string|max:2000',
        ], [
            'nama.required'  => 'Nama lengkap wajib diisi.',
            'email.required' => 'Alamat email wajib diisi.',
            'email.email'    => 'Format email tidak valid.',
            'pesan.required' => 'Isi pesan wajib diisi.',
        ]);

        Pesan::create([
            ...$validated,
            'ip_address' => $request->ip(),
        ]);

        return back()->with('success', 'Pesan Anda telah terkirim! Kami akan menghubungi Anda segera.');
    }
}
