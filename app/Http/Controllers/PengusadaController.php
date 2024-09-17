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

    public function show($id = 0)
    {
        $doctor = Doctor::with(['user', 'category'])->where('id', $id)->first();

        return Inertia::render('Pengusada/Show', ['doctor' => $doctor]);
    }
}
