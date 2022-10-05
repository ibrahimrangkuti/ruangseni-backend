<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\User\PagesController as UserPagesController;
use App\Http\Controllers\User\PostController as UserPostController;

// Auth
Route::get('login', [LoginController::class, 'index'])->name('login.index');

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('karya', [PagesController::class, 'karya'])->name('karya');
Route::get('event', [PagesController::class, 'event'])->name('event');
Route::get('leaderboard', [PagesController::class, 'leaderboard'])->name('leaderboard');

Route::prefix('user')->name('user.')->group(function() {
    Route::get('/', [UserPagesController::class, 'dashboard'])->name('dashboard');
    Route::prefix('post')->name('post.')->group(function() {
        Route::get('/', [UserPostController::class])->name('index');
    });
});