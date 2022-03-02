<?php

use App\Http\Controllers\Story\StoryController;
use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'story.',
    'prefix' => 'story',
], function () {
    Route::get('/', [StoryController::class, 'index']);
    
    Route::get('/{post:slug}', [StoryController::class, 'show']);
});
