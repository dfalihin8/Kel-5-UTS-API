<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;


Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('mahasiswa', MahasiswaController::class);
});

