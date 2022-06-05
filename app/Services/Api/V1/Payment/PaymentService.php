<?php

namespace App\Services\Api\V1\Payment;

use App\Models\Api\V1\Payments;
use App\Repositories\Api\V1\Payment\PaymentRepositoryContract;
use Illuminate\Database\Eloquent\Collection;

class PaymentService implements PaymentServiceContract
{
    public function __construct(
        protected PaymentRepositoryContract $repository
    ) {}

    public function get(int $id): Payments
    {
        return $this->repository->getById($id);
    }

    public function all(): Collection
    {
        return $this->repository->all();
    }

    public function store(array $data): Payments
    {
        return $this->repository->store($data);
    }

    public function update(array $data, int $id): Payments
    {
        return $this->repository->updateById($data, $id);
    }

    public function delete(int $id): void
    {
        $this->repository->delete($id);
    }
}