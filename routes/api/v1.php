<?php

use Illuminate\Support\Facades\Route;
use Collaborator\{GetCollaboratorController, 
    AllCollaboratorController,
    StoreCollaboratorController,
    UpdateCollaboratorController,
    DeleteCollaboratorController
};
use CurrentAccount\{GetCurrentAccountController, 
    AllCurrentAccountController,
    StoreCurrentAccountController,
    UpdateCurrentAccountController,
    DeleteCurrentAccountController
};
use BranchUnity\{GetBranchUnityController, 
    AllBranchUnityController,
    StoreBranchUnityController,
    UpdateBranchUnityController,
    DeleteBranchUnityController
};
use ClaimCheck\{GetClaimCheckController, 
    AllClaimCheckController,
    StoreClaimCheckController,
    UpdateClaimCheckController,
    DeleteClaimCheckController
};
use Classification\{GetClassificationController, 
    AllClassificationController,
    StoreClassificationController,
    UpdateClassificationController,
    DeleteClassificationController
};
use Customer\{GetCustomerController, 
    AllCustomerController,
    StoreCustomerController,
    UpdateCustomerController,
    DeleteCustomerController
};
use FormPayment\{GetFormPaymentController, 
    AllFormPaymentController,
    StoreFormPaymentController,
    UpdateFormPaymentController,
    DeleteFormPaymentController
};
use IncomeExpense\{GetIncomeExpenseController, 
    AllIncomeExpenseController,
    StoreIncomeExpenseController,
    UpdateIncomeExpenseController,
    DeleteIncomeExpenseController
};
use InsertProcedure\{GetInsertProcedureController, 
    AllInsertProcedureController,
    StoreInsertProcedureController,
    UpdateInsertProcedureController,
    DeleteInsertProcedureController
};
use InventoryStock\{GetInventoryStockController, 
    AllInventoryStockController,
    StoreInventoryStockController,
    UpdateInventoryStockController,
    DeleteInventoryStockController
};
use Item\{GetItemController, 
    AllItemController,
    StoreItemController,
    UpdateItemController,
    DeleteItemController
};
use Order\{GetOrderController, 
    AllOrderController,
    StoreOrderController,
    UpdateOrderController,
    DeleteOrderController
};
use Payment\{GetPaymentController, 
    AllPaymentController,
    StorePaymentController,
    UpdatePaymentController,
    DeletePaymentController
};
use Procedure\{GetProcedureController, 
    AllProcedureController,
    StoreProcedureController,
    UpdateProcedureController,
    DeleteProcedureController
};
use StockItem\{GetStockItemController, 
    AllStockItemController,
    StoreStockItemController,
    UpdateStockItemController,
    DeleteStockItemController
};
use User\{GetUserController, 
    AllUserController,
    StoreUserController,
    UpdateUserController,
    DeleteUserController
};

use Chat\{OpenChatController,

};

Route::prefix('v1')->group(function () {
    Route::prefix('collaborator')->group(function () {
        Route::get('/{id}', GetCollaboratorController::class);
        Route::get('/all', AllCollaboratorController::class);
        Route::post('/', StoreCollaboratorController::class);
        Route::put('/{id}', UpdateCollaboratorController::class);
        Route::delete('/', DeleteCollaboratorController::class);
    });
    
    Route::prefix('currentAccount')->group(function () {
        Route::get('/{id}', GetCurrentAccountController::class);
        Route::get('/all', AllCurrentAccountController::class);
        Route::post('/', StoreCurrentAccountController::class);
        Route::put('/{id}', UpdateCurrentAccountController::class);
        Route::delete('/', DeleteCurrentAccountController::class);
    });

    Route::prefix('branchUnits')->group(function () {
        Route::get('/{id}', GetBranchUnityController::class);
        Route::get('/all', AllBranchUnityController::class);
        Route::post('/', StoreBranchUnityController::class);
        Route::put('/{id}', UpdateBranchUnityController::class);
        Route::delete('/', DeleteBranchUnityController::class);
    });

    Route::prefix('claimCheck')->group(function () {
        Route::get('/{id}', GetClaimCheckController::class);
        Route::get('/all', AllClaimCheckController::class);
        Route::post('/', StoreClaimCheckController::class);
        Route::put('/{id}', UpdateClaimCheckController::class);
        Route::delete('/', DeleteClaimCheckController::class);
    });

    Route::prefix('classification')->group(function () {
        Route::get('/{id}', GetClassificationController::class);
        Route::get('/all', AllClassificationController::class);
        Route::post('/', StoreClassificationController::class);
        Route::put('/{id}', UpdateClassificationController::class);
        Route::delete('/', DeleteClassificationController::class);
    });

    Route::prefix('customer')->group(function () {
        Route::get('/{id}', GetCustomerController::class);
        Route::get('/all', AllCustomerController::class);
        Route::post('/', StoreCustomerController::class);
        Route::put('/{id}', UpdateCustomerController::class);
        Route::delete('/', DeleteCustomerController::class);
    });

    Route::prefix('form_payment')->group(function () {
        Route::get('/{id}', GetFormPaymentController::class);
        Route::get('/all', AllFormPaymentController::class);
        Route::post('/', StoreFormPaymentController::class);
        Route::put('/{id}', UpdateFormPaymentController::class);
        Route::delete('/', DeleteFormPaymentController::class);
    });

    Route::prefix('income_expense')->group(function () {
        Route::get('/{id}', GetIncomeExpenseController::class);
        Route::get('/all', AllIncomeExpenseController::class);
        Route::post('/', StoreIncomeExpenseController::class);
        Route::put('/{id}', UpdateIncomeExpenseController::class);
        Route::delete('/', DeleteIncomeExpenseController::class);
    });

    Route::prefix('insert_procedure')->group(function () {
        Route::get('/{id}', GetInsertProcedureController::class);
        Route::get('/all', AllInsertProcedureController::class);
        Route::post('/', StoreInsertProcedureController::class);
        Route::put('/{id}', UpdateInsertProcedureController::class);
        Route::delete('/', DeleteInsertProcedureController::class);
    });

    Route::prefix('inventory_stock')->group(function () {
        Route::get('/{id}', GetInventoryStockController::class);
        Route::get('/all', AllInventoryStockController::class);
        Route::post('/', StoreInventoryStockController::class);
        Route::put('/{id}', UpdateInventoryStockController::class);
        Route::delete('/', DeleteInventoryStockController::class);
    });

    Route::prefix('item')->group(function () {
        Route::get('/{id}', GetItemController::class);
        Route::get('/all', AllItemController::class);
        Route::post('/', StoreItemController::class);
        Route::put('/{id}', UpdateItemController::class);
        Route::delete('/', DeleteItemController::class);
    });

    Route::prefix('order')->group(function () {
        Route::get('/{id}', GetOrderController::class);
        Route::get('/all', AllOrderController::class);
        Route::post('/', StoreOrderController::class);
        Route::put('/{id}', UpdateOrderController::class);
        Route::delete('/', DeleteOrderController::class);
    });

    Route::prefix('payment')->group(function () {
        Route::get('/{id}', GetPaymentController::class);
        Route::get('/all', AllPaymentController::class);
        Route::post('/', StorePaymentController::class);
        Route::put('/{id}', UpdatePaymentController::class);
        Route::delete('/', DeletePaymentController::class);
    });

    Route::prefix('procedure')->group(function () {
        Route::get('/{id}', GetProcedureController::class);
        Route::get('/all', AllProcedureController::class);
        Route::post('/', StoreProcedureController::class);
        Route::put('/{id}', UpdateProcedureController::class);
        Route::delete('/', DeleteProcedureController::class);
    });

    Route::prefix('stock_item')->group(function () {
        Route::get('/{id}', GetStockItemController::class);
        Route::get('/all', AllStockItemController::class);
        Route::post('/', StoreStockItemController::class);
        Route::put('/{id}', UpdateStockItemController::class);
        Route::delete('/', DeleteStockItemController::class);
    });

    Route::prefix('user')->group(function () {
        Route::get('/{id}', GetUserController::class);
        Route::get('/all', AllUserController::class);
        Route::post('/', StoreUserController::class);
        Route::put('/{id}', UpdateUserController::class);
        Route::delete('/', DeleteUserController::class);
    });

    Route::prefix('chat')->group(function () {
        Route::post('/', OpenChatController::class);
    });
});
