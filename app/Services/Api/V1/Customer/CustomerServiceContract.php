<?php

namespace App\Services\Api\V1\Customer;

use App\Models\Api\V1\Customers;
use Illuminate\Database\Eloquent\Collection;

interface CustomerServiceContract
{
    public function get(int $id): Customers;
    public function all(): Collection;
    public function store(array $data): Customers;
    public function update(array $data, int $id): Customers;
    public function delete(int $id): void;
}