<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/posts/user/{id}', [PostsController::class, 'showUserPosts'])->name('showUserPosts');



Route::resource('post', PostController::class);