<?php

namespace App\Repositories\Api\V1\Order;

use App\Models\Api\V1\Orders;
use App\Repositories\Api\V1\BaseRepository;

class OrderRepository extends BaseRepository implements OrderRepositoryContract
{
    public function __construct(
        protected Orders $model
    ) {}

    public function getById(int $id): Orders
    {
        return $this->model
            ->where('id', $id)
            ->first();
    }

    public function all(): object
    {
        return $this->model->get();
    }

    public function store(array $data): Orders
    {
        return $this->model->create($data);
    }

    public function updateById(array $data, int $id): Orders
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