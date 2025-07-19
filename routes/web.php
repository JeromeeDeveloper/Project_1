<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

// Landing page routes
Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/contests', [LandingController::class, 'contests'])->name('contests');
Route::get('/contest-details', [LandingController::class, 'contestDetails'])->name('contest.details');
Route::get('/categories', [LandingController::class, 'categories'])->name('categories');
Route::get('/users', [LandingController::class, 'users'])->name('users');
