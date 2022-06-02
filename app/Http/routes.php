<?php

Route::get('/', function () {
    return view('pages/Home');
})->name('home');


Route::get('/about-us', function () {
    return view('pages/abouts');
})->name('about');
