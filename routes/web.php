<?php

use App\Http\Controllers\pagecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/about', function () {
//     return view('about');
// })->name('about');


Route::get('/home', [pagecontroller::class, 'home'])->name('home');
Route::get('/about', [pagecontroller::class, 'about'])->name('about');
Route::get('/contact', [pagecontroller::class, 'contact'])->name('contact');
?>
