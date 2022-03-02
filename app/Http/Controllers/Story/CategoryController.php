<?php

namespace App\Http\Controllers\Story;

use App\Http\Controllers\Controller;
use App\Models\Story\Category;
use Illuminate\View\View;

class CategoryController extends Controller
{
    protected const PER_PAGE = 3;

    public function show(Category $category): View
    {
        return view('story.categories.index', [
            'posts' => $category->posts()->paginate(self::PER_PAGE),
        ]);
    }
}
