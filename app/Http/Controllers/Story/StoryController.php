<?php

namespace App\Http\Controllers\Story;

use App\Http\Controllers\Controller;
use App\Models\Story\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;

class StoryController extends Controller
{
    public function index(): View
    {
        return view('story.index', [
            'posts' => $this->getAllPosts(request()->only('search')),
        ]);
    }

    public function show(Post $post): View
    {
        return view('story.show', [
            'post' => $post,
        ]);
    }

    public function getAllPosts(array $filters): Collection
    {
        return Post::search($filters)->published()->get();
    }
}
