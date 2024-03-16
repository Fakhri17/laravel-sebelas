<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home'); 
Route::view('contact', 'pages.contact')->name('contact');
Route::view('about', 'pages.about')->name('about');