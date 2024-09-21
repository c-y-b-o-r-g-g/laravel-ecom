<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


Route::get('/', [HomeController::class, 'homepage']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route::get('/home', [AdminController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/post_page', [AdminController::class, 'post_page']);


Route::post('/add_post', [AdminController::class, 'add_post']);


Route::get('/show_posts', [AdminController::class, 'show_posts']);