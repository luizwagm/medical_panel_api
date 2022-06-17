<?php

namespace App\Repositories\Api\V1\StockItem;

use App\Models\Api\V1\StockItems;
use App\Repositories\Api\V1\BaseRepositoryContract;

interface StockItemRepositoryContract extends BaseRepositoryContract
{
    public function getById(int $id): StockItems;
    public function all(): object;
    public function store(array $data): StockItems;
    public function updateById(array $data, int $id): StockItems;
    public function delete(int $id): void;
}