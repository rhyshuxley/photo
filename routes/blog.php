<?php

use App\Http\Controllers\Blog\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/blog/post', [BlogController::class, 'show']);
