<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;



Route::get('/', function () {
    return view('system.umsconfessionsphere');
});

Route::get('/crushing-list', function () {
    return view('system.crushing-list');
});

Route::get('/university-life-list', function () {
    return view('system.university-life-list');
});


Route::get('/general-list', function () {
    return view('system.general-list');
});


Route::get('/welcome',[WelcomeController::class,'welcome'])->name('welcome');