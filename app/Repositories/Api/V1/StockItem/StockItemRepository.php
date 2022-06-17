<?php

namespace App\Repositories\Api\V1\StockItem;

use App\Models\Api\V1\StockItems;
use App\Repositories\Api\V1\BaseRepository;

class StockItemRepository extends BaseRepository implements StockItemRepositoryContract
{
    public function __construct(
        protected StockItems $model
    ) {}

    public function getById(int $id): StockItems
    {
        return $this->model
            ->where('id', $id)
            ->first();
    }

    public function all(): object
    {
        return $this->model->get();
    }

    public function store(array $data): StockItems
    {
        return $this->model->create($data);
    }

    public function updateById(array $data, int $id): StockItems
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