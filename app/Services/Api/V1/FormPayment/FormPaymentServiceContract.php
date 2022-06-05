<?php

namespace App\Services\Api\V1\FormPayment;

use App\Models\Api\V1\FormPayments;
use Illuminate\Database\Eloquent\Collection;

interface FormPaymentServiceContract
{
    public function get(int $id): FormPayments;
    public function all(): Collection;
    public function store(array $data): FormPayments;
    public function update(array $data, int $id): FormPayments;
    public function delete(int $id): void;
}