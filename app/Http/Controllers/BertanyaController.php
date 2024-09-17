<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class BertanyaController extends Controller
{
    public function index(Request $request)
    {
        $title = Str::trim($request->input('title'));

        $questions = null;

        if ($title !== '') {
            $questions = Question::with(['user', 'answers'])->title($title)->orderByDesc('created_at')->paginate(10);
        } else {
            $questions = Question::with(['user', 'answers'])->orderByDesc('created_at')->paginate(10);
        }

        return Inertia::render('Bertanya/Index', ['questions' => $questions, 'title' => $title]);
    }

    public function create()
    {
        $user = Auth::user();
        $question = new Question();

        return Inertia::render('Bertanya/Create', ['user' => $user, 'question' => $question]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Question::create([
            'title' => $validated['title'],
            'slug' => Str::slug($validated['title']),
            'description' => $validated['description'],
            'question_status' => 'pending',
            'user_id' => Auth::user()->id,
        ]);

        return Redirect::route('bertanya.index');
    }

    public function show($id = 0)
    {
        $question = Question::with(['answers', 'user'])->where('id', $id)->first();
        $answers = Answer::with('user')->where('question_id', $id)->get();

        return Inertia::render('Bertanya/Show', ['question' => $question, 'answers' => $answers]);
    }
}
