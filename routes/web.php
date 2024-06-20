<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [DashboardController::class, "index"]);
Route::get('/terms', [DashboardController::class, "terms"]);
Route::get('/profile', [ProfileController::class, "index"]);