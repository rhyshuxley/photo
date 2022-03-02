<?php

namespace App\Http\Controllers\Story;

use App\Http\Controllers\Controller;
use App\Models\Story\Post;
use Illuminate\View\View;

class StoryController extends Controller
{
    public function index(): View
    {
        return view('story.index', [
            'posts' => Post::published(),
        ]);
    }

    public function show(Post $post): View
    {
        return view('story.show', [
            'post' => $post,
        ]);
    }
}
