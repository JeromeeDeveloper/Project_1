<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

// Landing page routes
Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/custom', [LandingController::class, 'custom'])->name('custom');
Route::get('/about', [LandingController::class, 'about'])->name('about');
Route::get('/categories', [LandingController::class, 'categories'])->name('categories');
Route::get('/contact', [LandingController::class, 'contact'])->name('contact');
