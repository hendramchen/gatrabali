<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Inertia\Inertia;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::with('user')->get();

        return Inertia::render('Question/Index', ['questions' => $questions]);
    }
}
