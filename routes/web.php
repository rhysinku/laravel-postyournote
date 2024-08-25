<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class , 'index'])->name('home');
Route::get('/post/{post}', [PostController::class , 'show'])->name('posts.show');
Route::get('/author/post/{user}', [UserController::class , 'author'])->name('posts.author');




Route::get('/register', function () { return view('auth.register'); })->name('view.register');
Route::get('/login', function () { return view('auth.login');})->name('view.login');

Route::get('/dashboard',[UserController::class, 'index']);


// Auth
Route::post('/auth', [AuthController::class , 'create'])->name('auth.create');