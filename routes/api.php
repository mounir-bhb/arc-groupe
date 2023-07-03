<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dugusan\CabineController;
use App\Http\Controllers\Dugusan\DugusanController;
use App\Http\Controllers\Dugusan\FreinController;
use App\Http\Controllers\Dugusan\HydrauController;
use App\Http\Controllers\Dugusan\LevageController;
use App\Http\Controllers\Dugusan\PanneauController;
use App\Http\Controllers\Dugusan\PorteController;
use App\Http\Controllers\Dugusan\PresentationController;
use App\Http\Controllers\Dugusan\RegulateurController;
use App\Http\Controllers\Dugusan\SecuriteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
