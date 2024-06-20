<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IdeaController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [DashboardController::class, "index"])->name('home');
Route::get('/terms', [DashboardController::class, "terms"])->name('terms');
Route::post('/store', [IdeaController::class, "store"])->name('idea.create');




Route::get('/profile', [ProfileController::class, "index"]);
