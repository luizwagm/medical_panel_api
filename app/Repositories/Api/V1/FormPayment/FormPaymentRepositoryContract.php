<?php

namespace App\Repositories\Api\V1\FormPayment;

use App\Models\Api\V1\FormPayments;
use App\Repositories\Api\V1\BaseRepositoryContract;

interface FormPaymentRepositoryContract extends BaseRepositoryContract
{
    public function getById(int $id): FormPayments;
    public function all(): object;
    public function store(array $data): FormPayments;
    public function updateById(array $data, int $id): FormPayments;
    public function delete(int $id): void;
}