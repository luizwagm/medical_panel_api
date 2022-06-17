<?php

namespace App\Repositories\Api\V1\Item;

use App\Models\Api\V1\Items;
use App\Repositories\Api\V1\BaseRepositoryContract;

interface ItemRepositoryContract extends BaseRepositoryContract
{
    public function getById(int $id): Items;
    public function all(): object;
    public function store(array $data): Items;
    public function updateById(array $data, int $id): Items;
    public function delete(int $id): void;
}