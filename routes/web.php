<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\Post\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('index');
Route::post('/posts', [PostController::class, 'store'])->name('post.store');
