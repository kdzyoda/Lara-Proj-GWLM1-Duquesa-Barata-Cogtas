<?php
use Illuminate\Support\Facades\Route;

// Member 1 — Home Page
Route::view('/', 'home')->name('home');

// Temporary redirects until other members' pages are integrated
Route::redirect('/about', '/')->name('about');
Route::redirect('/contact', '/')->name('contact');