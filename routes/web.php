<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/dashboard',[UserController::class, 'index']);


// Auth
Route::post('/auth', [UserController::class , 'create'])->name('auth.create');