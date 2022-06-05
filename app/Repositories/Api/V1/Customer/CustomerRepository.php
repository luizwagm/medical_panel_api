<?php

namespace App\Repositories\Api\V1\Customer;

use App\Models\Api\V1\Customers;
use App\Repositories\Api\V1\BaseRepository;

class CustomerRepository extends BaseRepository implements CustomerRepositoryContract
{
    public function __construct(
        protected Customers $model
    ) {}

    public function getById(int $id): Customers
    {
        return $this->model
            ->where('id', $id)
            ->first();
    }

    public function all(): object
    {
        return $this->model->get();
    }

    public function store(array $data): Customers
    {
        return $this->model->create($data);
    }

    public function updateById(array $data, int $id): Customers
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