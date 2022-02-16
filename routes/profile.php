<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Profile\ProfileController;

Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', [ProfileController::class, 'profile']);
    Route::post('/profile', [ProfileController::class, 'update'])->name('updateProfile');
});