<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;

class TestimoniController extends Controller
{
    public function index()
    {
        $testimoni = Testimoni::aktif()->get();
        return view('testimoni', compact('testimoni'));
    }
}
