<?php

namespace App\Repositories\Api\V1\FormPayment;

use App\Models\Api\V1\FormPayments;
use App\Repositories\Api\V1\BaseRepository;

class FormPaymentRepository extends BaseRepository implements FormPaymentRepositoryContract
{
    public function __construct(
        protected FormPayments $model
    ) {}

    public function getById(int $id): FormPayments
    {
        return $this->model
            ->where('id', $id)
            ->first();
    }

    public function all(): object
    {
        return $this->model->get();
    }

    public function store(array $data): FormPayments
    {
        return $this->model->create($data);
    }

    public function updateById(array $data, int $id): FormPayments
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