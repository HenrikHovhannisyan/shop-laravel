<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'is_admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'home'])->name('admin.home');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('users', UserController::class);
    Route::resource('contacts', ContactController::class);
    Route::put('/users/{user}/update-role', [UserController::class, 'updateRole'])->name('users.updateRole');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/product/{product}', [HomeController::class, 'show'])->name('products-show');
Route::get('/category/{category}', [HomeController::class, 'showCategory'])->name('category-show');

