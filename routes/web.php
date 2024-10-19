<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;



Route::get('/home', function () {
    return view('system.home');
});

Route::get('/welcome',[WelcomeController::class,'welcome'])->name('welcome');