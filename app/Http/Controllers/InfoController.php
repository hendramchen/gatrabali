<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class InfoController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderByDesc('created_at')->paginate(10);

        return Inertia::render('Info/Index', ['info' => $blogs]);
    }

    public function show($slug = '')
    {
        $blog = Blog::where('slug', $slug)->first();

        return Inertia::render('Info/Show', ['blog' => $blog]);
    }
}
