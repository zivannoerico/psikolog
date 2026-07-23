<?php

namespace App\Http\Controllers;

use App\Models\Psikolog;

class TimController extends Controller
{
    public function index()
    {
        $tim = Psikolog::aktif()->get();
        return view('tim', compact('tim'));
    }
}
