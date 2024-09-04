<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BertanyaController extends Controller
{
    public function index()
    {
        $questions = Question::with(['user', 'answers'])->get();

        return Inertia::render('Bertanya/Index', ['questions' => $questions]);
    }
}
