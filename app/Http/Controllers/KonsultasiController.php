<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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
        if ($user === null) {
            return Redirect::route('login');
        }
        $consultation = new Consultation();

        return Inertia::render('Konsultasi/Create', ['user' => $user, 'consultation' => $consultation, 'status' => session('status')]);
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

        return Redirect::route('konsultasi.index');
    }
}
