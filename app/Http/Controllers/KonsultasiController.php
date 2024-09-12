<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class KonsultasiController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $consultations = [];
        if ($user) {
            $consultations = Consultation::where('user_id', $user->id)->get();
        }

        return Inertia::render('Konsultasi/Index', ['consultations' => $consultations, 'user' => $user]);
    }

    public function create()
    {
        $user = Auth::user();
        $consultation = new Consultation();

        return Inertia::render('Konsultasi/Create', ['user' => $user, 'consultation' => $consultation]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'problem' => 'required',
            'phone' => 'required',
        ]);

        Consultation::create([
            'problem' => $validated['problem'],
            'phone' => $validated['phone'],
            'user_id' => Auth::user()->id,
            'consult_status' => 'pending',
        ]);
    }
}
