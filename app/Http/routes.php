<?php

Route::get('/', function () {
    return view('Home');
});


Route::get('about-us', function () {
    return view('abouts');
});
