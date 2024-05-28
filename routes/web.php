<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Home;
use App\Livewire\PopularMovie;
use App\Http\Controllers\PopularMovieController;

// Frontend Routes
Route::get('/movie/popular', PopularMovie::class)->name('movie.popular');
Route::get('/', Home::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/counter', Counter::class);

require __DIR__.'/auth.php';
