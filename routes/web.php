<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects.index');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');

// Admin Routes
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'authenticate'])->name('login.post');
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/projects/create', [AdminController::class, 'create'])->name('projects.create');
    Route::post('/projects', [AdminController::class, 'store'])->name('projects.store');
    Route::get('/projects/{project}/edit', [AdminController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/{project}', [AdminController::class, 'update'])->name('projects.update');
    Route::delete('/projects/{project}', [AdminController::class, 'destroy'])->name('projects.destroy');
});
