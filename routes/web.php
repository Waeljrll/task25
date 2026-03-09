<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Metadata\Group;




Route::get('/home', [PageController::class, 'home'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');



Route::prefix('categories')->name('categories.')->group(function () {

    Route::get('/', [CategoryController::class, 'index'])->name('index');

    Route::get('/create', [CategoryController::class, 'create'])->name('create');

    Route::post('/', [CategoryController::class, 'store'])->name('store');

    Route::get('/{id}', [CategoryController::class, 'show'])->name('show');

    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('edit');

    Route::put('/{id}', [CategoryController::class, 'update'])->name('update');

    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('destroy');
});

Route::prefix('posts')->name('posts.')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('index');

    Route::get('/create', [PostController::class, 'create'])->name('create');



    Route::post('/', [PostController::class, 'store'])->name('store');

    Route::get('/{id}', [PostController::class, 'show'])->name('show');

    Route::get('/{id}/edit', [PostController::class, 'edit'])->name('edit');

    Route::put('/{id}', [PostController::class, 'update'])->name('update');

    Route::delete('/{id}', [PostController::class, 'destroy'])->name('destroy');
});
