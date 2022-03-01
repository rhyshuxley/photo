<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('blog.index');
    }

    public function show(string $slug): View
    {
        $post = Post::find($slug);

        return view('blog.show', [
            'post' => $post,
        ]);
    }
}
