<?php

namespace App\Repositories\Api\V1\Payment;

use App\Models\Api\V1\Payments;
use App\Repositories\Api\V1\BaseRepositoryContract;

interface PaymentRepositoryContract extends BaseRepositoryContract
{
    public function getById(int $id): Payments;
    public function all(): object;
    public function store(array $data): Payments;
    public function updateById(array $data, int $id): Payments;
    public function delete(int $id): void;
}