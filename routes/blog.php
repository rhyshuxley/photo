<?php

use App\Http\Controllers\Blog\BlogController;
use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'blog.',
    'prefix' => 'blog',
], function () {
    Route::get('/', [BlogController::class, 'index']);
    
    Route::get('/{post:slug}', [BlogController::class, 'show'])->where('postId', '[A-z0-9\-]+');
});
