<?php

namespace App\Services\Api\V1\StockItem;

use App\Models\Api\V1\StockItems;
use Illuminate\Database\Eloquent\Collection;

interface StockItemServiceContract
{
    public function get(int $id): StockItems;
    public function all(): Collection;
    public function store(array $data): StockItems;
    public function update(array $data, int $id): StockItems;
    public function delete(int $id): void;
}