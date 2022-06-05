<?php

namespace App\Repositories\Api\V1\ClaimCheck;

use App\Models\Api\V1\ClaimChecks;
use App\Repositories\Api\V1\BaseRepositoryContract;

interface ClaimCheckRepositoryContract extends BaseRepositoryContract
{
    public function getById(int $id): ClaimChecks;
    public function all(): object;
    public function store(array $data): ClaimChecks;
    public function updateById(array $data, int $id): ClaimChecks;
    public function delete(int $id): void;
}