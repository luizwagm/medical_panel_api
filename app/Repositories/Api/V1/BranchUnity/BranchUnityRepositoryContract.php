<?php

namespace App\Repositories\Api\V1\BranchUnity;

use App\Models\Api\V1\BranchUnits;
use App\Repositories\Api\V1\BaseRepositoryContract;

interface BranchUnityRepositoryContract extends BaseRepositoryContract
{
    public function getById(int $id): BranchUnits;
    public function all(): object;
    public function store(array $data): BranchUnits;
    public function updateById(array $data, int $id): BranchUnits;
    public function delete(int $id): void;
}