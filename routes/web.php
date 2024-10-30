<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageNavigation;

// Public routes


// Protected routes (Require authentication)
Route::middleware('auth')->group(function () {
    Route::get('/', [PageNavigation::class, 'home'])->name('home');
    Route::get('/crushing-list', [PageNavigation::class, 'crushing'])->name('crushing');
    Route::get('/general-list', [PageNavigation::class, 'general'])->name('general');
    Route::get('/university-life-list', [PageNavigation::class, 'universityLife'])->name('university-life');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
