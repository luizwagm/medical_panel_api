<?php

namespace App\Providers;

use App\Repositories\BaseRepository;
use App\Repositories\BaseRepositoryContract;
use App\Repositories\BranchUnity\BranchUnityRepository;
use App\Repositories\BranchUnity\BranchUnityRepositoryContract;
use App\Repositories\ClaimCheck\ClaimCheckRepository;
use App\Repositories\ClaimCheck\ClaimCheckRepositoryContract;
use App\Repositories\Classification\ClassificationRepository;
use App\Repositories\Classification\ClassificationRepositoryContract;
use App\Repositories\Collaborator\CollaboratorRepository;
use App\Repositories\Collaborator\CollaboratorRepositoryContract;
use App\Repositories\CurrentAccount\CurrentAccountRepository;
use App\Repositories\CurrentAccount\CurrentAccountRepositoryContract;
use App\Repositories\Customer\CustomerRepository;
use App\Repositories\Customer\CustomerRepositoryContract;
use App\Repositories\FormPayment\FormPaymentRepository;
use App\Repositories\FormPayment\FormPaymentRepositoryContract;
use App\Repositories\IncomeExpense\IncomeExpenseRepository;
use App\Repositories\IncomeExpense\IncomeExpenseRepositoryContract;
use App\Repositories\InsertProcedure\InsertProcedureRepository;
use App\Repositories\InsertProcedure\InsertProcedureRepositoryContract;
use App\Repositories\InventoryStock\InventoryStockRepository;
use App\Repositories\InventoryStock\InventoryStockRepositoryContract;
use App\Repositories\Item\ItemRepository;
use App\Repositories\Item\ItemRepositoryContract;
use App\Repositories\Order\OrderRepository;
use App\Repositories\Order\OrderRepositoryContract;
use App\Repositories\Payment\PaymentRepository;
use App\Repositories\Payment\PaymentRepositoryContract;
use App\Repositories\Procedure\ProcedureRepository;
use App\Repositories\Procedure\ProcedureRepositoryContract;
use App\Repositories\StockItem\StockItemRepository;
use App\Repositories\StockItem\StockItemRepositoryContract;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryContract;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(BaseRepositoryContract::class, BaseRepository::class);
        $this->app->singleton(CustomerRepositoryContract::class, CustomerRepository::class);
        $this->app->singleton(BranchUnityRepositoryContract::class, BranchUnityRepository::class);
        $this->app->singleton(ClaimCheckRepositoryContract::class, ClaimCheckRepository::class);
        $this->app->singleton(ClassificationRepositoryContract::class, ClassificationRepository::class);
        $this->app->singleton(CollaboratorRepositoryContract::class, CollaboratorRepository::class);
        $this->app->singleton(CurrentAccountRepositoryContract::class, CurrentAccountRepository::class);
        $this->app->singleton(FormPaymentRepositoryContract::class, FormPaymentRepository::class);
        $this->app->singleton(IncomeExpenseRepositoryContract::class, IncomeExpenseRepository::class);
        $this->app->singleton(InsertProcedureRepositoryContract::class, InsertProcedureRepository::class);
        $this->app->singleton(InventoryStockRepositoryContract::class, InventoryStockRepository::class);
        $this->app->singleton(ItemRepositoryContract::class, ItemRepository::class);
        $this->app->singleton(OrderRepositoryContract::class, OrderRepository::class);
        $this->app->singleton(PaymentRepositoryContract::class, PaymentRepository::class);
        $this->app->singleton(ProcedureRepositoryContract::class, ProcedureRepository::class);
        $this->app->singleton(StockItemRepositoryContract::class, StockItemRepository::class);
        $this->app->singleton(UserRepositoryContract::class, UserRepository::class);
    }
}