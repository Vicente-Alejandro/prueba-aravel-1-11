<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\dashboard\PostController;
use App\Http\Controllers\blog\BlogController;
use App\Http\Controllers\dashboard\CategoryController;
use Illuminate\Support\Facades\Route;

use App\Http\Middleware\UserAccessDashboardMiddleware;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', UserAccessDashboardMiddleware::class]], function() {
    Route::resources([
        'post' => PostController::class,
        'category' => CategoryController::class,
    ]);
    Route::get('/', function() {
        return view('dashboard');
    })->name('dashboard');
});

Route::group(['prefix' => 'blog'], function() {
    Route::get('/', [BlogController::class, 'index'])->name('blog');
    Route::get('/show/{post}', [BlogController::class, 'show'])->name('blog.show');
});

require __DIR__.'/auth.php';
