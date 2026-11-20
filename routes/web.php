<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;

// Welcome page - Today's tasks only
Route::get('/', [TaskController::class, 'today']);

// Task List - All tasks
Route::get('/tasks', [TaskController::class, 'index']);

// Profile page
Route::get('/profile', [ProfileController::class, 'index']);

// About page
Route::get('/about', function () {
    return view('about');
});
