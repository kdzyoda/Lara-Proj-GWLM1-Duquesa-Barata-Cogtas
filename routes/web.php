
<?php

use Illuminate\Support\Facades\Route;

// Member 1 — Khizha Duquesa
Route::view('/', 'home')->name('home');

// Temporary redirects for navigation testing only.
// These will be replaced by your groupmates' real routes.
Route::redirect('/about', '/')->name('about');
Route::redirect('/contact', '/')->name('contact');