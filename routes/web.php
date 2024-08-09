<?php

use App\Models\Article;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('index', [
        'greeting' => 'Hello',
        'self' => 'My name is Dym Sohin, im a web-developer',
        'articles' => Article::all(),
    ]);
});
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
Route::name('admin.edit')->get('/edit/{slug}', function ($slug = null) {
    return view('admin.edit');
})->where('slug', '[A-Za-z0-9-]+');
Route::name('admin.index')->get('/admin', function () {
    return view('admin.index');
});


Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);



Route::get('/{slug}', function (string $slug) {
    $article = Article::find($slug);

    return view('article',
        [ 'article' => $article
        , 'title' => $article['title']
        , 'slug' => $article['slug']
        , 'body' => $article['body']
        ]);
})->where('slug', '[A-Za-z0-9-]+');
