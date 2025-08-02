<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CounterController;

// Landing page routes
Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/custom', [LandingController::class, 'custom'])->name('custom');
Route::get('/about', [LandingController::class, 'about'])->name('about');
Route::get('/categories', [LandingController::class, 'categories'])->name('categories');
Route::get('/contact', [LandingController::class, 'contact'])->name('contact');

// Authentication routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin routes (protected)
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');
});

// Counter and interaction routes
Route::post('/api/increment-visitor', [CounterController::class, 'incrementVisitor']);
Route::post('/api/toggle-like', [CounterController::class, 'toggleLike']);
Route::post('/api/add-comment', [CounterController::class, 'addComment']);
Route::get('/api/get-comments', [CounterController::class, 'getComments']);
Route::get('/api/get-stats', [CounterController::class, 'getStats']);
Route::get('/api/get-testimonials', [CounterController::class, 'getTestimonials']);
