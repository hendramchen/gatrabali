<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class InfoController extends Controller
{
    public function index()
    {
        return Inertia::render('Info/Index', ['pageTitle' => 'Info']);
    }
}
