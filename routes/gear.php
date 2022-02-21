<?php

use App\Http\Controllers\Gear\GearController;
use App\Http\Controllers\Gear\ManageController;
use App\Http\Controllers\Gear\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('/gear', function () {
    return view('gear.gear');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/upload-gear', [UploadController::class, 'index']);
    Route::post('/upload-gear', [UploadController::class, 'upload'])->name('upload-gear');

    Route::get('/manage-gear', [ManageController::class, 'index']);
    Route::post('/deleteGear', [ManageController::class, 'deleteGear'])->name('deleteGear');
});

Route::get('/api/get-gear', [GearController::class, 'getGear']);
