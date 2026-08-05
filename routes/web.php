<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FigController;
use App\Http\Controllers\AdminController;

Route::get('/', [FigController::class, 'index'])->name('home');
Route::get('/urunler', [FigController::class, 'products'])->name('products');
Route::get('/hakkimizda', [FigController::class, 'about'])->name('about');
Route::get('/iletisim', [FigController::class, 'contact'])->name('contact');

Route::get('/login', [AdminController::class, 'showLogin'])->name('login');
Route::post('/login', [AdminController::class, 'login'])->middleware('throttle:5,1');
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::post('/upload-image', [AdminController::class, 'uploadImage'])->name('upload_image');
    Route::get('/ayarlar', [AdminController::class, 'settings'])->name('settings');
    Route::post('/ayarlar', [AdminController::class, 'updateSettings']);
});
