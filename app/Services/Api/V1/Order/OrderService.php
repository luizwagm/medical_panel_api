<?php

namespace App\Services\Api\V1\Order;

use App\Models\Api\V1\Orders;
use App\Repositories\Api\V1\Order\OrderRepositoryContract;
use Illuminate\Database\Eloquent\Collection;

class OrderService implements OrderServiceContract
{
    public function __construct(
        protected OrderRepositoryContract $repository
    ) {}

    public function get(int $id): Orders
    {
        return $this->repository->getById($id);
    }

    public function all(): Collection
    {
        return $this->repository->all();
    }

    public function store(array $data): Orders
    {
        return $this->repository->store($data);
    }

    public function update(array $data, int $id): Orders
    {
        return $this->repository->updateById($data, $id);
    }

    public function delete(int $id): void
    {
        $this->repository->delete($id);
    }
}