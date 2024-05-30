<?php

use App\Http\Controllers\Frontend;
use App\Http\Controllers\BeasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Frontend::class, 'home'])->name('Frontend.store');
Route::post('/post_beasiswa', [Frontend::class, 'store'])->name('post_beasiswa');
Route::get('/beasiswa', [BeasiswaController::class, 'index']);
// Route resource for products
Route::resource('beasiswas', BeasiswaController::class);
