<?php

namespace App\Repositories\Api\V1\Customer;

use App\Models\Api\V1\Customers;
use App\Repositories\Api\V1\BaseRepositoryContract;

interface CustomerRepositoryContract extends BaseRepositoryContract
{
    public function getById(int $id): Customers;
    public function all(): object;
    public function store(array $data): Customers;
    public function updateById(array $data, int $id): Customers;
    public function delete(int $id): void;
}