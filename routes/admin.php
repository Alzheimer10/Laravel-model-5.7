<?php

Route::get('/', function () {
    return view('admin.home');
})->name('home');

Route::get('/about', function () {
    return view('admin.pages.about');
})->name('about');

Route::get('/profile', function () {
    return view('admin.pages.profile');
})->name('profile');