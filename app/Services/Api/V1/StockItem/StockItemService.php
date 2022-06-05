<?php

namespace App\Services\Api\V1\StockItem;

use App\Models\Api\V1\StockItems;
use App\Repositories\Api\V1\StockItem\StockItemRepositoryContract;
use Illuminate\Database\Eloquent\Collection;

class StockItemService implements StockItemServiceContract
{
    public function __construct(
        protected StockItemRepositoryContract $repository
    ) {}

    public function get(int $id): StockItems
    {
        return $this->repository->getById($id);
    }

    public function all(): Collection
    {
        return $this->repository->all();
    }

    public function store(array $data): StockItems
    {
        return $this->repository->store($data);
    }

    public function update(array $data, int $id): StockItems
    {
        return $this->repository->updateById($data, $id);
    }

    public function delete(int $id): void
    {
        $this->repository->delete($id);
    }
}