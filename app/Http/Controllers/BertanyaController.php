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

        return Inertia::render('Bertanya/Index', ['questions' => $questions, 'title' => $title, 'user' => $request->user()]);
    }

    public function create()
    {
        $user = Auth::user();
        $question = new Question();

        if ($user === null) {
            return Redirect::route('login');
        }

        return Inertia::render('Bertanya/Create', [
            'user' => $user,
            'question' => $question,
            'status' => session('status'),
        ]);
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

    public function edit($id = 0)
    {
        $user = Auth::user();
        $question = Question::with('user')->where('id', $id)->first();

        if ($user->role !== 'doctor') {
            return Redirect::route('bertanya.index');
        }

        if ($user === null) {
            return Redirect::route('login');
        }

        return Inertia::render('Bertanya/Edit', [
            'user' => $user,
            'question' => $question,
            'status' => session('status'),
        ]);
    }

    public function update(Request $request, $id = 0)
    {
        $validated = $request->validate([
            'description' => 'required',
        ]);

        $question = Question::find($id);
        $question->question_status = 'done';
        $question->save();


        Answer::create([
            'question_id' => $id,
            'description' => $validated['description'],
            'user_id' => $request->user()->id,
        ]);

        return Redirect::route('bertanya.show', $id);
    }
}
