<?php

namespace App\Providers;

use App\Services\Api\V1\BranchUnity\BranchUnityService;
use App\Services\Api\V1\BranchUnity\BranchUnityServiceContract;
use App\Services\Api\V1\Chat\ChatService;
use App\Services\Api\V1\Chat\ChatServiceContract;
use App\Services\Api\V1\ClaimCheck\ClaimCheckService;
use App\Services\Api\V1\ClaimCheck\ClaimCheckServiceContract;
use App\Services\Api\V1\Classification\ClassificationService;
use App\Services\Api\V1\Classification\ClassificationServiceContract;
use App\Services\Api\V1\Collaborator\CollaboratorService;
use App\Services\Api\V1\Collaborator\CollaboratorServiceContract;
use App\Services\Api\V1\CurrentAccount\CurrentAccountService;
use App\Services\Api\V1\CurrentAccount\CurrentAccountServiceContract;
use App\Services\Api\V1\Customer\CustomerService;
use App\Services\Api\V1\Customer\CustomerServiceContract;
use App\Services\Api\V1\FormPayment\FormPaymentService;
use App\Services\Api\V1\FormPayment\FormPaymentServiceContract;
use App\Services\Api\V1\IncomeExpense\IncomeExpenseService;
use App\Services\Api\V1\IncomeExpense\IncomeExpenseServiceContract;
use App\Services\Api\V1\InsertProcedure\InsertProcedureService;
use App\Services\Api\V1\InsertProcedure\InsertProcedureServiceContract;
use App\Services\Api\V1\InventoryStock\InventoryStockService;
use App\Services\Api\V1\InventoryStock\InventoryStockServiceContract;
use App\Services\Api\V1\Item\ItemService;
use App\Services\Api\V1\Item\ItemServiceContract;
use App\Services\Api\V1\Order\OrderService;
use App\Services\Api\V1\Order\OrderServiceContract;
use App\Services\Api\V1\Payment\PaymentService;
use App\Services\Api\V1\Payment\PaymentServiceContract;
use App\Services\Api\V1\Procedure\ProcedureService;
use App\Services\Api\V1\Procedure\ProcedureServiceContract;
use App\Services\Api\V1\StockItem\StockItemService;
use App\Services\Api\V1\StockItem\StockItemServiceContract;
use App\Services\Api\V1\User\UserService;
use App\Services\Api\V1\User\UserServiceContract;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(BranchUnityServiceContract::class, BranchUnityService::class);
        $this->app->singleton(ClaimCheckServiceContract::class, ClaimCheckService::class);
        $this->app->singleton(ClassificationServiceContract::class, ClassificationService::class);
        $this->app->singleton(CollaboratorServiceContract::class, CollaboratorService::class);
        $this->app->singleton(CurrentAccountServiceContract::class, CurrentAccountService::class);
        $this->app->singleton(CustomerServiceContract::class, CustomerService::class);
        $this->app->singleton(FormPaymentServiceContract::class, FormPaymentService::class);
        $this->app->singleton(IncomeExpenseServiceContract::class, IncomeExpenseService::class);
        $this->app->singleton(InsertProcedureServiceContract::class, InsertProcedureService::class);
        $this->app->singleton(InventoryStockServiceContract::class, InventoryStockService::class);
        $this->app->singleton(ItemServiceContract::class, ItemService::class);
        $this->app->singleton(OrderServiceContract::class, OrderService::class);
        $this->app->singleton(PaymentServiceContract::class, PaymentService::class);
        $this->app->singleton(ProcedureServiceContract::class, ProcedureService::class);
        $this->app->singleton(StockItemServiceContract::class, StockItemService::class);
        $this->app->singleton(UserServiceContract::class, UserService::class);
        $this->app->singleton(ChatServiceContract::class, ChatService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
