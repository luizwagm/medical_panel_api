<?php

namespace App\Repositories\Api\V1\Payment;

use App\Models\Api\V1\Payments;
use App\Repositories\Api\V1\BaseRepository;

class PaymentRepository extends BaseRepository implements PaymentRepositoryContract
{
    public function __construct(
        protected Payments $model
    ) {}

    public function getById(int $id): Payments
    {
        return $this->model
            ->where('id', $id)
            ->first();
    }

    public function all(): object
    {
        return $this->model->get();
    }

    public function store(array $data): Payments
    {
        return $this->model->create($data);
    }

    public function updateById(array $data, int $id): Payments
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