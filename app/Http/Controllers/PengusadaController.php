<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PengusadaController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with(['user', 'category'])->get();

        return Inertia::render('Pengusada/Index', ['doctors' => $doctors]);
    }
}
