<?php

namespace App\Services\Api\V1\Payment;

use App\Models\Api\V1\Payments;
use Illuminate\Database\Eloquent\Collection;

interface PaymentServiceContract
{
    public function get(int $id): Payments;
    public function all(): Collection;
    public function store(array $data): Payments;
    public function update(array $data, int $id): Payments;
    public function delete(int $id): void;
}