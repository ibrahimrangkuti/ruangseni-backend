<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\User\PagesController as UserPagesController;
use App\Http\Controllers\User\PostController as UserPostController;
use App\Http\Controllers\User\ProfileController as UserProfileController;
use App\Http\Controllers\Admin\PagesController as AdminPagesController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\EventController as AdminEventController;


// Auth
Route::get('login', [LoginController::class, 'index'])->name('login.index');
Route::post('login', [LoginController::class, 'process'])->name('login.process');

Route::get('logout', function() {
    $user = User::find(Auth::user()->id);
    $user->logged_in = false;
    $user->update();
    Auth::logout();
    return redirect(route('login.index'));
})->name('logout');

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('karya', [PagesController::class, 'karya'])->name('karya');
Route::get('karya/{slug}', [PagesController::class, 'detail_karya'])->name('karya.detail'); // Menampilkan postingan berdasarkan slug
Route::get('event', [PagesController::class, 'event'])->name('event');
Route::get('event/{slug}', [PagesController::class, 'detail_event'])->name('event.detail');
Route::get('event/{slug}/create-post', [PagesController::class, 'create_post_event'])->name('event.create');
Route::post('event/{slug}/create-post', [PagesController::class, 'store_post_event'])->name('event.store');

Route::get('leaderboard', [PagesController::class, 'leaderboard'])->name('leaderboard');

Route::get('profile/{username}', [PagesController::class, 'profile'])->name('profile');
Route::get('profile/{username}/create-post', [PagesController::class, 'create_post'])->name('create.post');
Route::post('profile/create-post', [PagesController::class, 'store_post'])->name('store.post');

Route::get('category/{slug}', [PagesController::class, 'category'])->name('category');
// Route::get('{id}/show', [PagesController::class, 'show'])->name('show');
// Route::get('{id}/like', [PagesController::class, 'like'])->name('like');

Route::post('post/{id}/like', [PagesController::class, 'likePost'])->name('post.like');

Route::prefix('user')->middleware('role:siswa')->name('user.')->group(function() {
    Route::get('/', [UserPagesController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard', [UserPagesController::class, 'dashboard'])->name('dashboard');
    Route::prefix('post')->name('post.')->group(function() {
        Route::get('/', [UserPostController::class, 'index'])->name('index');
        Route::get('create', [UserPostController::class, 'create'])->name('create');
        Route::post('create', [UserPostController::class, 'store'])->name('store');
        Route::get('{id}/edit', [UserPostController::class, 'edit'])->name('edit');
        Route::post('{id}/update', [UserPostController::class, 'update'])->name('update');
        Route::get('{id}/delete', [UserPostController::class, 'delete'])->name('delete');
        Route::get('{id}/show', [UserPostController::class, 'show'])->name('show');
    });
    Route::get('profile', [UserProfileController::class, 'index'])->name('profile');
    Route::post('profile', [UserProfileController::class, 'update'])->name('profile.update');
    Route::post('profile/change-password', [UserProfileController::class, 'changePassword'])->name('profile.changePassword');
});

Route::prefix('admin')->middleware('role:admin')->name('admin.')->group(function() {
    Route::get('/', [AdminPagesController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard', [AdminPagesController::class, 'dashboard'])->name('dashboard');
    Route::prefix('post')->name('post.')->group(function() {
        Route::get('/', [AdminPostController::class, 'index'])->name('index');
        Route::get('{id}/show', [AdminPostController::class, 'show'])->name('show');
        Route::get('{slug}/approve', [AdminPostController::class, 'approve'])->name('approve');
        Route::get('{slug}/disapprove', [AdminPostController::class, 'disapprove'])->name('disapprove');
        Route::get('{id}/delete', [AdminPostController::class, 'delete'])->name('delete');
    });
    Route::prefix('user')->name('user.')->group(function() {
        Route::get('/', [AdminUserController::class, 'index'])->name('index');
        Route::post('import', [AdminUserController::class, 'import'])->name('import');
        Route::get('export', [AdminUserController::class, 'export'])->name('export');
        Route::get('{id}/edit', [AdminUserController::class, 'edit'])->name('edit');
        Route::post('{id}/update', [AdminUserController::class, 'update'])->name('update');
        Route::get('{id}/delete', [AdminUserController::class, 'delete'])->name('delete');
    });
    Route::prefix('category')->name('category.')->group(function() {
        Route::get('/', [AdminCategoryController::class, 'index'])->name('index');
        Route::get('create', [AdminCategoryController::class, 'create'])->name('create');
        Route::post('create', [AdminCategoryController::class, 'store'])->name('store');
        Route::get('{id}/edit', [AdminCategoryController::class, 'edit'])->name('edit');
        Route::post('{id}/update', [AdminCategoryController::class, 'update'])->name('update');
        Route::get('{id}/delete', [AdminCategoryController::class, 'delete'])->name('delete');
    });
    Route::prefix('event')->name('event.')->group(function() {
        Route::get('/', [AdminEventController::class, 'index'])->name('index');
        Route::get('create', [AdminEventController::class, 'create'])->name('create');
        Route::post('create', [AdminEventController::class, 'store'])->name('store');
        Route::get('{id}/edit', [AdminEventController::class, 'edit'])->name('edit');
        Route::post('{id}/update', [AdminEventController::class, 'update'])->name('update');
        Route::get('{id}/delete', [AdminEventController::class, 'delete'])->name('delete');
    });
});
