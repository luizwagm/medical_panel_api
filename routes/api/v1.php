<?php

use Illuminate\Support\Facades\Route;
use Collaborator\GetCollaboratorController;

Route::prefix('v1')->group(function () {

    // Route::middleware('auth')->group(function () {
    //     Route::post('logout', [AuthController::class, 'logout']);
    //     Route::post('refresh', [AuthController::class, 'refresh']);
    //     Route::post('me', [AuthController::class, 'me']);
    // });

    Route::prefix('collaborator')->group(function () {
        Route::get('/', GetCollaboratorController::class);
    });    
});
