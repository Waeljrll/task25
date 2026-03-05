<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\pagecontroller;
use Illuminate\Support\Facades\Route;
use PHPUnit\Metadata\Group;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [pagecontroller::class, 'home'])->name('home');

Route::get('/about', [pagecontroller::class, 'about'])->name('about');

Route::get('/contact', [pagecontroller::class, 'contact'])->name('contact');



Route::prefix('categories')->name('categories.')->group(function () {

    Route::get('/', [CategoryController::class, 'index'])->name('index');

    Route::get('/create', [CategoryController::class, 'create'])->name('create');

    Route::post('/', [CategoryController::class, 'store'])->name('store');

    Route::get('/{id}', [CategoryController::class, 'show'])->name('show');

    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('edit');

    Route::put('/{id}', [CategoryController::class, 'update'])->name('update');

    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('destroy');
});
