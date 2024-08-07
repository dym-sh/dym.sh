<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::name('about.show')->get('/about', function () {
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
    return view('notes');
});


Route::name('pages.list')->get('/list', function () {
    return view('list');
});
Route::name('admin.new')->get('/new', function () {
    return view('edit');
});
Route::name('admin.edit')->get('/edit/{slug}', function ($name) {
    return view('edit');
})->where('slug', '[A-Za-z0-9-]+');
Route::name('admin.index')->get('/admin', function ($name = null) {
    return view('admin');
});


Route::name('page.show')->get('/{slug}', function () {
    return view('page');
})->where('slug', '[A-Za-z0-9-]+');
