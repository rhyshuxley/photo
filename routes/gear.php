<?php

use Illuminate\Support\Facades\Route;

Route::get('/gear', function () {
    return view('gear.gear');
});