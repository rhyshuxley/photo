<?php

namespace App\Http\Controllers\Story;

use App\Http\Controllers\Controller;
use App\Models\Story\Post;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\View;

class StoryController extends Controller
{
    protected const PER_PAGE = 3;

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

    public function getAllPosts(array $filters): LengthAwarePaginator
    {
        return Post::search($filters)
            ->published()
            ->paginate(self::PER_PAGE);
    }
}
