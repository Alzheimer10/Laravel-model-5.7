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

Route::group(['middleware' => ['role:superadmin']], function () {
	Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->name('logs');
});

Route::group(['middleware' => ['permission:publish articles']], function () {
    //
});
