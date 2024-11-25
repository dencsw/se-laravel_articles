<?php
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
Route::get('/posts', [ArticleController::class, 'index'])->name('posts.index');;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts/{code}', [ArticleController::class, 'show'])->name('posts.show');
