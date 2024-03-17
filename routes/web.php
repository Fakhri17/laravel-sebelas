<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::view('/', 'home')->name('home'); 

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('contact', 'pages.contact')->name('contact');
Route::view('about', 'pages.about')->name('about');