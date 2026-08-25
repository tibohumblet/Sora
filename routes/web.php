<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;

// Route::get('/', function () {
//     return view('welcome');
// });

// user
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');

Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/{id}', [UserController::class, 'show']);

// blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');