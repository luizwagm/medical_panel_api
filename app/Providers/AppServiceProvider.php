<?php

namespace App\Providers;

use App\Services\BranchUnity\BranchUnityService;
use App\Services\BranchUnity\BranchUnityServiceContract;
use App\Services\ClaimCheck\ClaimCheckService;
use App\Services\ClaimCheck\ClaimCheckServiceContract;
use App\Services\Classification\ClassificationService;
use App\Services\Classification\ClassificationServiceContract;
use App\Services\Collaborator\CollaboratorService;
use App\Services\Collaborator\CollaboratorServiceContract;
use App\Services\CurrentAccount\CurrentAccountService;
use App\Services\CurrentAccount\CurrentAccountServiceContract;
use App\Services\Customer\CustomerService;
use App\Services\Customer\CustomerServiceContract;
use App\Services\FormPayment\FormPaymentService;
use App\Services\FormPayment\FormPaymentServiceContract;
use App\Services\IncomeExpense\IncomeExpenseService;
use App\Services\IncomeExpense\IncomeExpenseServiceContract;
use App\Services\InsertProcedure\InsertProcedureService;
use App\Services\InsertProcedure\InsertProcedureServiceContract;
use App\Services\InventoryStock\InventoryStockService;
use App\Services\InventoryStock\InventoryStockServiceContract;
use App\Services\Item\ItemService;
use App\Services\Item\ItemServiceContract;
use App\Services\Order\OrderService;
use App\Services\Order\OrderServiceContract;
use App\Services\Payment\PaymentService;
use App\Services\Payment\PaymentServiceContract;
use App\Services\Procedure\ProcedureService;
use App\Services\Procedure\ProcedureServiceContract;
use App\Services\StockItem\StockItemService;
use App\Services\StockItem\StockItemServiceContract;
use App\Services\User\UserService;
use App\Services\User\UserServiceContract;
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
