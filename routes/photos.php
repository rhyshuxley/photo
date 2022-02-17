<?php

use App\Http\Controllers\Photo\ManageController;
use App\Http\Controllers\Photo\UploadController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {
    Route::get('/upload', [UploadController::class, 'index']);
    Route::post('/upload', [UploadController::class, 'upload'])->name('upload');

    Route::get('/manage', [ManageController::class, 'index']);
    Route::post('/deletePhoto', [ManageController::class, 'deletePhoto'])->name('deletePhoto');
});
