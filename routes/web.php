<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::get('/crea-articolo', [ArticleController::class, 'create'])->name('create.article');

Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('show.article');

Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');

// Route::get('/revisor/index', [RevisorController::class, 'index'])->name('revisor.index');
Route::get('/revisor/index', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');

Route::patch('/accept/{article}', [RevisorController::class, 'accept'])->name('accept');

Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');

Route::get('/revisor/request', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');
Route::get('/search/article', [PublicController::class, 'searchArticles'])->name('article.search');

Route::post('/contact-us/send', [PublicController::class, 'store'])->name('contact.store');

Route::get('/revisor/reset', function () {
    session()->forget('processed_article_ids'); // Resetta la lista
    return redirect()->route('revisor.index')->with('message', 'Lista degli articoli ripristinata.');
})->name('revisor.reset');
