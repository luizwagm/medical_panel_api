<?php

namespace App\Services\Api\V1\Customer;

use App\Models\Api\V1\Customers;
use App\Repositories\Api\V1\Customer\CustomerRepositoryContract;
use Illuminate\Database\Eloquent\Collection;

class CustomerService implements CustomerServiceContract
{
    public function __construct(
        protected CustomerRepositoryContract $repository
    ) {}

    public function get(int $id): Customers
    {
        return $this->repository->getById($id);
    }

    public function all(): Collection
    {
        return $this->repository->all();
    }

    public function store(array $data): Customers
    {
        return $this->repository->store($data);
    }

    public function update(array $data, int $id): Customers
    {
        return $this->repository->updateById($data, $id);
    }

    public function delete(int $id): void
    {
        $this->repository->delete($id);
    }
}