<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\User\PagesController as UserPagesController;

// Auth
Route::get('login', [LoginController::class, 'index'])->name('login.index');

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('karya', [PagesController::class, 'karya'])->name('karya');
Route::get('event', [PagesController::class, 'event'])->name('event');
Route::get('leaderboard', [PagesController::class, 'leaderboard'])->name('leaderboard');

Route::prefix('user/')->name('user.')->group(function() {
    Route::get('dashboard', function() {
        return view('user.post.index');
    });

    Route::get('tambah', function() {
        return view('user.post.create');
    });

    Route::get('edit', function() {
        return view('user.post.edit');
    });

});

// Route::prefix('user/')->name('user.')->group(function() {
//     Route::get('tambah', function() {
//         return view('user.post.create');
//     });
// });

// Route::prefix('user/')->name('user.')->group(function() {
//     Route::get('edit', function() {
//         return view('user.post.edit');
//     });
// });

Route::prefix('admin/')->name('user.')->group(function() {
    Route::get('dashboard', function() {
        return view('admin.index');
    });
});