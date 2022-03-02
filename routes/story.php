<?php

use App\Http\Controllers\Story\CategoryController;
use App\Http\Controllers\Story\StoryController;
use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'story.',
    'prefix' => 'story',
], function () {
    Route::get('/', [StoryController::class, 'index']);
    
    Route::get('/{post:slug}', [StoryController::class, 'show']);

    Route::get('/{category:slug}', [CategoryController::class, 'show']);
});

Route::group([
    'as' => 'categories.',
    'prefix' => 'categories',
], function () {
    Route::get('/{category:slug}', [CategoryController::class, 'show']);
});
