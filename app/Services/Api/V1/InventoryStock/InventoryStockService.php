<?php

namespace App\Services\Api\V1\InventoryStock;

use App\Models\Api\V1\InventoryStocks;
use App\Repositories\Api\V1\InventoryStock\InventoryStockRepositoryContract;
use Illuminate\Database\Eloquent\Collection;

class InventoryStockService implements InventoryStockServiceContract
{
    public function __construct(
        protected InventoryStockRepositoryContract $repository
    ) {}

    public function get(int $id): InventoryStocks
    {
        return $this->repository->getById($id);
    }

    public function all(): Collection
    {
        return $this->repository->all();
    }

    public function store(array $data): InventoryStocks
    {
        return $this->repository->store($data);
    }

    public function update(array $data, int $id): InventoryStocks
    {
        return $this->repository->updateById($data, $id);
    }

    public function delete(int $id): void
    {
        $this->repository->delete($id);
    }
}