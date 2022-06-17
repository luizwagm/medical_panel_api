<?php

namespace App\Repositories\Api\V1\Classification;

use App\Models\Api\V1\Classifications;
use App\Repositories\Api\V1\BaseRepositoryContract;

interface ClassificationRepositoryContract extends BaseRepositoryContract
{
    public function getById(int $id): Classifications;
    public function all(): object;
    public function store(array $data): Classifications;
    public function updateById(array $data, int $id): Classifications;
    public function delete(int $id): void;
}