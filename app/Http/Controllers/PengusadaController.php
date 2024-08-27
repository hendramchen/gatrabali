<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PengusadaController extends Controller
{
    public function index()
    {
        return Inertia::render('Pengusada/Index', ['pageTitle' => 'Pengusada']);
    }
}
