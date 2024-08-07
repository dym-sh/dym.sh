<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index');
Route::view('/about', 'about');

Route::view('/graphics', 'graphics');
Route::view('/photos',   'photos');
Route::view('/comics',   'comics');
Route::view('/code',     'code');
Route::view('/notes',    'notes');


Route::name('pages.list')->get('/list', function () {
    return view('list');
});
Route::name('admin.new')->get('/new', function () {
    return view('admin.edit');
});
Route::name('admin.edit')->get('/edit', function () {
    return view('admin.edit');
});
Route::name('admin.edit')->get('/edit/{slug}', function ($name = null) {
    return view('admin.edit');
})->where('slug', '[A-Za-z0-9-]+');
Route::name('admin.index')->get('/admin', function ($name = null) {
    return view('admin.index');
});

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);



Route::name('page.show')->get('/{slug}', function () {
    return view('page');
})->where('slug', '[A-Za-z0-9-]+');
