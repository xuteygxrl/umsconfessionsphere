<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;



Route::get('/', function () {
    return view('system.partial.umsconfessionsphere');
});

Route::get('/home', function () {
    return view('system.partial.home');
});

Route::get('/welcome',[WelcomeController::class,'welcome'])->name('welcome');