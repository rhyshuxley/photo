<?php

use App\Http\Controllers\Photo\ManageController;
use App\Http\Controllers\Photo\PhotoController;
use App\Http\Controllers\Photo\UploadController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {
    Route::get('/upload-photos', [UploadController::class, 'index']);
    Route::post('/upload-photos', [UploadController::class, 'upload'])->name('upload-photos');

    Route::get('/manage-photos', [ManageController::class, 'index']);
    Route::post('/deletePhoto', [ManageController::class, 'deletePhoto'])->name('deletePhoto');
});

Route::get('/api/get-main', [PhotoController::class, 'getMain']);
Route::get('/api/get-carousel', [PhotoController::class, 'getCarousel']);
