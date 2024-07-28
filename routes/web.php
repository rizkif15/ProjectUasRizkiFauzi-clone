<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

Route::middleware('auth')->group(function(){
    Route::get('/layouts/home', [PostController::class, 'home'])->name('layouts.home');
    Route::get('/show/{code}', [PostController::class, 'show'])->name('posts.show');
    Route::get('/add', [PostController::class, 'add'])->name('posts.add');
    Route::get('/edit/{code}', [PostController::class, 'edit'])->name('posts.edit');
    Route::get('/pdf', [PostController::class, 'generatePDF'])->name('posts.pdf');
    Route::post('/logout', [PostController::class, 'logout'])->name('logout');
    Route::get('/login', [PostController::class, 'login'])->name('posts.login');
    Route::resource('/posts', PostController::class);
});

Route::middleware('guest')->group(function() {
    Route::get('/', function () {return view('layouts.landingPage');});
    Route::get('/layouts/landingPage', [ProfileController::class, 'landingPage'])->name('layouts.landingPage');
    Route::get('/register', [ProfileController::class, 'registerForm'])->name('profile.register');
    Route::post('/register', [ProfileController::class, 'register'])->name('register');
    Route::get('/login', [ProfileController::class, 'loginForm'])->name('profile.login');
    Route::post('/login', [ProfileController::class, 'login'])->name('login');
});

