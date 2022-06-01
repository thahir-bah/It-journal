<?php

Route::get('/', function () {
    return view('pages/Home');
});


Route::get('/about-us', function () {
    return view('pages/abouts');
});
