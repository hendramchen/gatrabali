<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TentangController extends Controller
{
    public function index()
    {
        $about = About::all();
        return Inertia::render('Tentang/Index', ['about' => $about[0]]);
    }
}
