<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\Post\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('index');
Route::get('/posts', [PostController::class, 'storePage'])->name('post.storePage');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');
Route::post('/posts', [PostController::class, 'store'])->name('post.store');
