<?php

namespace App\Providers;

use App\Repositories\BaseRepository;
use App\Repositories\BaseRepositoryContract;
use App\Repositories\Customer\CustomerRepository;
use App\Repositories\Customer\CustomerRepositoryContract;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(BaseRepositoryContract::class, BaseRepository::class);
        $this->app->singleton(CustomerRepositoryContract::class, CustomerRepository::class);
    }
}