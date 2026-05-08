<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PageController;
use App\Http\controllers\PostController;

Route::get('/posts', [PostController::class, 'index']);

Route::put('/posts/{id}',
[PostController::class, 'update']);

Route::get('/posts/{id}/edit',
[PostController::class, 'edit']);

Route::delete('/posts/{id}',
[PostController::class, 'destroy']);

Route::get('/posts/create',
[PostController::class, 'create']);
Route::post('/posts',
[PostController::class, 'store'])->name('posts.store');

