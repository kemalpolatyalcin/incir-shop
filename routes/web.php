<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FigController;

Route::get('/', [FigController::class, 'index'])->name('home');
Route::get('/hakkimizda', [FigController::class, 'about'])->name('about');
Route::get('/iletisim', [FigController::class, 'contact'])->name('contact');
