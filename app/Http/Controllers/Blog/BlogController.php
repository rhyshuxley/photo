<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog\Post;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('blog.index', [
            'posts' => Post::published(),
        ]);
    }

    public function show(Post $post): View
    {
        return view('blog.show', [
            'post' => $post,
        ]);
    }
}
