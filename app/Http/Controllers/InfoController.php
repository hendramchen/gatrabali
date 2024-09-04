<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class InfoController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        return Inertia::render('Info/Index', ['blogs' => $blogs]);
    }

    public function show($id)
    {
        $blog = Blog::find($id);

        return Inertia::render('Info/Show', ['blog' => $blog]);
    }
}
