<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects.index');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');

// Admin Routes Removed

Route::get('/test', function () {
    return 'it works';
});
