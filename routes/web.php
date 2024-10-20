<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;



Route::get('/', function () {
    return view('system.umsconfessionsphere');
});

Route::get('/welcome',[WelcomeController::class,'welcome'])->name('welcome');