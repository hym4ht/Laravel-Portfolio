<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::name('portfolio.')->group(function () {
    Route::get('/', [PortfolioController::class, 'home'])->name('home');
    Route::get('/about', [PortfolioController::class, 'about'])->name('about');
    Route::get('/myskills', [PortfolioController::class, 'myskills'])->name('skills');
    Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
    Route::get('/post', [PortfolioController::class, 'post'])->name('post'); // Existing single post view
    Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
});

use App\Http\Controllers\PostController;
Route::resource('posts', PostController::class)->only(['index', 'create', 'store']);

