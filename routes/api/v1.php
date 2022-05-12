<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\Auth\AuthController;

Route::prefix('v1')->group(function () {
    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post('login', [AuthController::class, 'login']);
    Route::middleware('auth')->group(function () {
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::post('me', [AuthController::class, 'me']);
    });
});
