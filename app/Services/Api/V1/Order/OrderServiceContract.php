<?php

namespace App\Services\Api\V1\Order;

use App\Models\Api\V1\Orders;
use Illuminate\Database\Eloquent\Collection;

interface OrderServiceContract
{
    public function get(int $id): Orders;
    public function all(): Collection;
    public function store(array $data): Orders;
    public function update(array $data, int $id): Orders;
    public function delete(int $id): void;
}