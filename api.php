<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

// Route untuk login (tidak perlu auth)
Route::post('/login', [AuthController::class, 'login']);

// Route yang perlu authentication
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('mahasiswa', MahasiswaController::class);
});

