<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function index(): View
    {
        return view('about.about');
    }
}
