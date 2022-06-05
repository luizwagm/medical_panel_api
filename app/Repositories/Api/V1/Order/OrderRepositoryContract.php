<?php

namespace App\Repositories\Api\V1\Order;

use App\Models\Api\V1\Orders;
use App\Repositories\Api\V1\BaseRepositoryContract;

interface OrderRepositoryContract extends BaseRepositoryContract
{
    public function getById(int $id): Orders;
    public function all(): object;
    public function store(array $data): Orders;
    public function updateById(array $data, int $id): Orders;
    public function delete(int $id): void;
}