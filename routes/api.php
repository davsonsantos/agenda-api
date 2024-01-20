<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Me\MeController;
use Illuminate\Support\Facades\Route;

Route::post("login", LoginController::class);

// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LogoutController::class, 'logout']);
// Route::middleware('auth:sanctum')->group(function () {
//     Route::get('/me', [MeController::class, 'show']);
// });
