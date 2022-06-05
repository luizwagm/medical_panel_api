<?php

namespace App\Repositories\Api\V1\Item;

use App\Models\Api\V1\Items;
use App\Repositories\Api\V1\BaseRepository;

class ItemRepository extends BaseRepository implements ItemRepositoryContract
{
    public function __construct(
        protected Items $model
    ) {}

    public function getById(int $id): Items
    {
        return $this->model
            ->where('id', $id)
            ->first();
    }

    public function all(): object
    {
        return $this->model->get();
    }

    public function store(array $data): Items
    {
        return $this->model->create($data);
    }

    public function updateById(array $data, int $id): Items
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