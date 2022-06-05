<?php

namespace App\Services\Api\V1\FormPayment;

use App\Models\Api\V1\FormPayments;
use App\Repositories\Api\V1\FormPayment\FormPaymentRepositoryContract;
use Illuminate\Database\Eloquent\Collection;

class FormPaymentService implements FormPaymentServiceContract
{
    public function __construct(
        protected FormPaymentRepositoryContract $repository
    ) {}

    public function get(int $id): FormPayments
    {
        return $this->repository->getById($id);
    }

    public function all(): Collection
    {
        return $this->repository->all();
    }

    public function store(array $data): FormPayments
    {
        return $this->repository->store($data);
    }

    public function update(array $data, int $id): FormPayments
    {
        return $this->repository->updateById($data, $id);
    }

    public function delete(int $id): void
    {
        $this->repository->delete($id);
    }
}