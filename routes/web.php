<?php

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Post\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('index');
Route::get('/posts/storePage', [PostController::class, 'storePage'])->name('post.storePage');
Route::get('/posts/editPage/{post}', [PostController::class, 'editPage'])->name('post.editPage');
Route::get('/posts/showPage/{post}', [PostController::class, 'show'])->name('post.show');

Route::post('/posts/store', [PostController::class, 'store'])->name('post.store');

Route::put('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');

Route::delete('/posts/{post}', [PostController::class, 'delete'])->name('post.delete');

Route::get('/category/{category}', [CategoryController::class, 'postsByCategory'])->name('posts.by.category');
