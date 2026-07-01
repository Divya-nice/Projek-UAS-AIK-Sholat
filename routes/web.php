<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModeAnakController;
use App\Http\Controllers\ModeDewasaController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('mode-anak')->name('mode-anak.')->group(function () {
    Route::get('/sholat', [ModeAnakController::class, 'index'])->name('index');
    Route::get('/sholat/{sholat}', [ModeAnakController::class, 'tampilkanGerakan'])->name('gerakan');
});

Route::prefix('mode-dewasa')->name('mode-dewasa.')->group(function () {
    Route::get('/sholat', [ModeDewasaController::class, 'index'])->name('index');
    Route::get('/sholat/{sholat}', [ModeDewasaController::class, 'tampilkanPanduan'])->name('panduan');
});