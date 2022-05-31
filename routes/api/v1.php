<?php

use Illuminate\Support\Facades\Route;
use Collaborator\{GetCollaboratorController, 
    AllCollaboratorController,
    StoreCollaboratorController,
    UpdateCollaboratorController,
    DeleteCollaboratorController
};

Route::prefix('v1')->group(function () {
    Route::prefix('collaborator')->group(function () {
        Route::get('/{id}', GetCollaboratorController::class);
        Route::get('/all', AllCollaboratorController::class);
        Route::post('/', StoreCollaboratorController::class);
        Route::put('/', UpdateCollaboratorController::class);
        Route::delete('/', DeleteCollaboratorController::class);
    });    
});
