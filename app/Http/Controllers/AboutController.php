<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Psikolog;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $tim    = Psikolog::aktif()->get();
        $galeri = Galeri::aktif()->take(12)->get();

        return view('about', compact('tim', 'galeri'));
    }
}
