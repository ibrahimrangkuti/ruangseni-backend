<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\User\PagesController as UserPagesController;
use App\Http\Controllers\Admin\PagesController as AdminPagesController;

// Auth
Route::get('login', [LoginController::class, 'index'])->name('login.index');
Route::post('login', [LoginController::class, 'process'])->name('login.process');

Route::get('logout', function() {
    Auth::logout();

    return redirect(route('login.index'));
})->name('logout');

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('karya', [PagesController::class, 'karya'])->name('karya');
Route::get('event', [PagesController::class, 'event'])->name('event');
Route::get('leaderboard', [PagesController::class, 'leaderboard'])->name('leaderboard');

Route::prefix('user')->name('user.')->group(function() {
    Route::get('/', [UserPagesController::class, 'dashboard'])->name('dashboard');
});

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/', [AdminPagesController::class, 'dashboard'])->name('dashboard');
});
