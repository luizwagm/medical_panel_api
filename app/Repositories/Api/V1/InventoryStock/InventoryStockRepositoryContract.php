<?php

namespace App\Repositories\Api\V1\InventoryStock;

use App\Models\Api\V1\InventoryStocks;
use App\Repositories\Api\V1\BaseRepositoryContract;

interface InventoryStockRepositoryContract extends BaseRepositoryContract
{
    public function getById(int $id): InventoryStocks;
    public function all(): object;
    public function store(array $data): InventoryStocks;
    public function updateById(array $data, int $id): InventoryStocks;
    public function delete(int $id): void;
}