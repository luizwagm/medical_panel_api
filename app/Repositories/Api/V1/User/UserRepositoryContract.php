<?php

namespace App\Repositories\Api\V1\User;

use App\Models\Api\V1\Users;
use App\Repositories\Api\V1\BaseRepositoryContract;

interface UserRepositoryContract extends BaseRepositoryContract
{
    public function getById(int $id): Users;
    public function all(): object;
    public function store(array $data): Users;
    public function updateById(array $data, int $id): Users;
    public function delete(int $id): void;
}