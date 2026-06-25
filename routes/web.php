<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModeDewasaController;
use App\Http\Controllers\ModeAnakController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/mode-dewasa', [ModeDewasaController::class, 'index']);
Route::get('/mode-anak', [ModeAnakController::class, 'index']);