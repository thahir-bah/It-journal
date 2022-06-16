<?php

Route::get('/', function () {
    return view('pages/Home');
})->name('home');


Route::get('/about-us', function () {
    return view('pages/abouts');
})->name('about');



Route::get('/header', function () {
    return view('includes/header');
})->name('header');


Route::get('/login', function () {
    return view('pages/login');
})->name('login');

Route::get('/register', function () {
    return view('pages/registre');
})->name('register');

Route::get('/announcements', function () {
    return view('pages/announcements');
})->name('annonce');

Route::get('/search', function () {
    return view('pages/search');
})->name('search');

Route::get('/archives', function () {
    return view('pages/archives');
})->name('archives');

Route::get('/about', function () {
    return view('pages/about');
})->name('about');