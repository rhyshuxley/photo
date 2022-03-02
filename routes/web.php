<?php

use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

include base_path('routes/about.php');
include base_path('routes/gear.php');
include base_path('routes/photos.php');
include base_path('routes/profile.php');
include base_path('routes/story.php');

Route::get('/', [HomeController::class, 'index']);

Auth::routes(['register' => false]);
