<?php

use App\Http\Controllers\testController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/dashboard',
    [ImageController::class, 'myImages']
)->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/images', [testController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('images');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/uploadimages', [ImageController::class, 'index'])->name('upload.images');
    Route::patch('/uploadimages', [ImageController::class, 'store'])->name('store.image');
});

Route::get('/change', [LanguageController::class, 'change'])->name('setLang');

require __DIR__ . '/auth.php';
