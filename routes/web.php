<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

















Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
