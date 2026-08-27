<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index', [
            'blogs' => Blog::all()
        ]);
    }

    // Doc: Wiew needs to be created!
    
    public function show($id): View
    {
        return view('blog.show', [
            'blog' => Blog::findOrFail($id)
        ]);
    }
}
