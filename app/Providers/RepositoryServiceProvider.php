<?php

namespace App\Providers;

use App\Repositories\Api\V1\BaseRepository;
use App\Repositories\Api\V1\BaseRepositoryContract;
use App\Repositories\Api\V1\BranchUnity\BranchUnityRepository;
use App\Repositories\Api\V1\BranchUnity\BranchUnityRepositoryContract;
use App\Repositories\Api\V1\Chat\ChatRepository;
use App\Repositories\Api\V1\Chat\ChatRepositoryContract;
use App\Repositories\Api\V1\ClaimCheck\ClaimCheckRepository;
use App\Repositories\Api\V1\ClaimCheck\ClaimCheckRepositoryContract;
use App\Repositories\Api\V1\Classification\ClassificationRepository;
use App\Repositories\Api\V1\Classification\ClassificationRepositoryContract;
use App\Repositories\Api\V1\Collaborator\CollaboratorRepository;
use App\Repositories\Api\V1\Collaborator\CollaboratorRepositoryContract;
use App\Repositories\Api\V1\Company\CompanyRepository;
use App\Repositories\Api\V1\Company\CompanyRepositoryContract;
use App\Repositories\Api\V1\CurrentAccount\CurrentAccountRepository;
use App\Repositories\Api\V1\CurrentAccount\CurrentAccountRepositoryContract;
use App\Repositories\Api\V1\Customer\CustomerRepository;
use App\Repositories\Api\V1\Customer\CustomerRepositoryContract;
use App\Repositories\Api\V1\FormPayment\FormPaymentRepository;
use App\Repositories\Api\V1\FormPayment\FormPaymentRepositoryContract;
use App\Repositories\Api\V1\IncomeExpense\IncomeExpenseRepository;
use App\Repositories\Api\V1\IncomeExpense\IncomeExpenseRepositoryContract;
use App\Repositories\Api\V1\InsertProcedure\InsertProcedureRepository;
use App\Repositories\Api\V1\InsertProcedure\InsertProcedureRepositoryContract;
use App\Repositories\Api\V1\InventoryStock\InventoryStockRepository;
use App\Repositories\Api\V1\InventoryStock\InventoryStockRepositoryContract;
use App\Repositories\Api\V1\Item\ItemRepository;
use App\Repositories\Api\V1\Item\ItemRepositoryContract;
use App\Repositories\Api\V1\Order\OrderRepository;
use App\Repositories\Api\V1\Order\OrderRepositoryContract;
use App\Repositories\Api\V1\Payment\PaymentRepository;
use App\Repositories\Api\V1\Payment\PaymentRepositoryContract;
use App\Repositories\Api\V1\Procedure\ProcedureRepository;
use App\Repositories\Api\V1\Procedure\ProcedureRepositoryContract;
use App\Repositories\Api\V1\StockItem\StockItemRepository;
use App\Repositories\Api\V1\StockItem\StockItemRepositoryContract;
use App\Repositories\Api\V1\User\UserRepository;
use App\Repositories\Api\V1\User\UserRepositoryContract;
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
        $this->app->singleton(ChatRepositoryContract::class, ChatRepository::class);
        $this->app->singleton(CompanyRepositoryContract::class, CompanyRepository::class);
    }
}