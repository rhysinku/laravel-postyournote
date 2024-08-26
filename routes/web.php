<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



// For Viewing

// Route::get('/login', function () { return view('auth.login');})->name('view.login');
Route::view('/login', 'auth.login')->name('view.login');
// Route::get('/register', function () { return view('auth.register'); })->name('view.register');
Route::view('/register', 'auth.register')->name('view.register');





// Post Controller
Route::controller(PostController::class)->group(function () {
Route::get('/', 'index')->name('home');
Route::get('/post/{post}', 'show')->name('posts.show');
});

Route::get('/author/post/{user}', [UserController::class , 'author'])->name('posts.author');





// DashBoard
Route::get('/dashboard',[UserController::class, 'index']);


// Auth
Route::post('/register', [AuthController::class , 'create'])->name('auth.create');
Route::post('/login', [AuthController::class , 'destroy'])->name('auth.logout');