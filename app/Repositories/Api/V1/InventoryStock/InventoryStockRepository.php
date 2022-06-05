<?php

namespace App\Repositories\Api\V1\InventoryStock;

use App\Models\Api\V1\InventoryStocks;
use App\Repositories\Api\V1\BaseRepository;

class InventoryStockRepository extends BaseRepository implements InventoryStockRepositoryContract
{
    public function __construct(
        protected InventoryStocks $model
    ) {}

    public function getById(int $id): InventoryStocks
    {
        return $this->model
            ->where('id', $id)
            ->first();
    }

    public function all(): object
    {
        return $this->model->get();
    }

    public function store(array $data): InventoryStocks
    {
        return $this->model->create($data);
    }

    public function updateById(array $data, int $id): InventoryStocks
    {
        return $this->model
            ->where('id', $id)
            ->update($data);
    }

    public function delete(int $id): void
    {
        $this->model
            ->where('id', $id)
            ->delete();
    }
}