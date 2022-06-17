<?php

namespace App\Services\Api\V1\Item;

use App\Models\Api\V1\Items;
use Illuminate\Database\Eloquent\Collection;

interface ItemServiceContract
{
    public function get(int $id): Items;
    public function all(): Collection;
    public function store(array $data): Items;
    public function update(array $data, int $id): Items;
    public function delete(int $id): void;
}