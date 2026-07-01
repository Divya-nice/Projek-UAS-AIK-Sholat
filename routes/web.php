<?php

use App\Http\Controllers\ModeAnakController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('mode-anak')->name('mode-anak.')->group(function () {
    Route::get('/sholat', [ModeAnakController::class, 'index'])->name('index');
    Route::get('/sholat/{sholat}', [ModeAnakController::class, 'tampilkanGerakan'])->name('gerakan');
});
Route::get('/', [HomeController::class, 'index']);
