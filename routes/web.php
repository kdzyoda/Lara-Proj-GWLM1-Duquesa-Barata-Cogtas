<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Paddler's Coffee Hauz — Web Routes
|--------------------------------------------------------------------------
| Member 1: Home Page
| Member 2: About Page
| Member 3: Contact Page
|--------------------------------------------------------------------------
*/

// Member 1 — Home
Route::view('/', 'home')->name('home');

// Member 2 — About
Route::view('/about', 'about')->name('about');

// Member 3 — Contact
Route::view('/contact', 'contact')->name('contact');
