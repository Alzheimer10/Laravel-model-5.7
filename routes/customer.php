<?php

Route::get('/', function () {
    return view('customer.home');
})->name('home');

Route::get('/profile', function () {
    return view('customer.pages.profile');
})->name('profile');