<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\About\AboutController;

// About
Route::get('/about', [AboutController::class, 'index']);