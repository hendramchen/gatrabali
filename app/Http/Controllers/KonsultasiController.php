<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class KonsultasiController extends Controller
{
    public function index()
    {
        return Inertia::render('Konsultasi/Index', []);
    }
}
