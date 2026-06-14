<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Request;

Route::get('/', [BasicController::class, 'index'])->name('home');
Route::get('/about', [BasicController::class, 'about'])->name('about');


Route::get('/contact', [BasicController::class, 'contact'])->name('contacts');

Route::post('/contact', [BasicController::class, 'submit'])->name('contact.post');

Route::get('/posts', [PostController::class, 'posts'])->name('posts');
