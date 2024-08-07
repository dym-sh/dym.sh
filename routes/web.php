<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/graphics', function () {
    return view('graphics');
});

Route::get('/photos', function () {
    return view('photos');
});

Route::get('/comics', function () {
    return view('comics');
});

Route::get('/code', function () {
    return view('code');
});

Route::get('/notes', function () {
    return view('code');
});
