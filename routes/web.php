<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModeDewasaController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/mode-dewasa', [ModeDewasaController::class, 'index']);