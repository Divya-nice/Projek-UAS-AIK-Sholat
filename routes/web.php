<?php

use App\Http\Controllers\ModeAnakController;
use App\Http\Controllers\ModeDewasaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/audio-gerakan/{kode}', [ModeDewasaController::class, 'audioGerakan'])->name('audio.gerakan');

Route::prefix('mode-anak')->name('mode-anak.')->group(function () {
    Route::get('/sholat', [ModeAnakController::class, 'index'])->name('index');
    Route::get('/sholat/{sholat}', [ModeAnakController::class, 'tampilkanGerakan'])->name('gerakan');
});

Route::prefix('mode-dewasa')->name('mode-dewasa.')->group(function () {
    Route::get('/sholat', [ModeDewasaController::class, 'index'])->name('index');
    Route::get('/sholat/{sholat}', [ModeDewasaController::class, 'tampilkanPanduan'])->name('panduan');
    Route::get('/audio-niat/{sholat}', [ModeDewasaController::class, 'audioNiat'])->name('audio');
});