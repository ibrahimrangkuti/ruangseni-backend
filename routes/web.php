<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\User\PagesController as UserPagesController;
use App\Http\Controllers\User\PostController as UserPostController;
use App\Http\Controllers\Admin\PagesController as AdminPagesController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\UserController as AdminUserController;

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

Route::prefix('user')->middleware('role:siswa')->name('user.')->group(function() {
    Route::get('/', [UserPagesController::class, 'dashboard'])->name('dashboard');
    Route::prefix('post')->name('post.')->group(function() {
        Route::get('/', [UserPostController::class])->name('index');
    });
});

Route::prefix('admin')->middleware('role:admin')->name('admin.')->group(function() {
    Route::get('/', [AdminPagesController::class, 'dashboard'])->name('dashboard');
    Route::prefix('post')->name('post.')->group(function() {
        Route::get('/', [AdminPostController::class, 'index'])->name('index');
    });
    Route::prefix('user')->name('user.')->group(function() {
        Route::get('/', [AdminUserController::class, 'index'])->name('index');
        Route::post('import', [AdminUserController::class, 'import'])->name('import');
        Route::get('export', [AdminUserController::class, 'export'])->name('export');
        Route::get('{id}/delete', [AdminUserController::class, 'delete'])->name('delete');
    });
});
