<?php

namespace App\Services\Api\V1\InventoryStock;

use App\Models\Api\V1\InventoryStocks;
use Illuminate\Database\Eloquent\Collection;

interface InventoryStockServiceContract
{
    public function get(int $id): InventoryStocks;
    public function all(): Collection;
    public function store(array $data): InventoryStocks;
    public function update(array $data, int $id): InventoryStocks;
    public function delete(int $id): void;
}