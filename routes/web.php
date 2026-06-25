<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModeDewasaController;
use App\Http\Controllers\ModeAnakController;
use App\Http\Controllers\GerakanController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/mode-dewasa', [ModeDewasaController::class, 'index']);
Route::get('/mode-anak', [ModeAnakController::class, 'index']);
Route::get('/gerakan', [GerakanController::class,'index']);