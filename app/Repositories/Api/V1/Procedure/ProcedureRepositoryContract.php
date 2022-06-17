<?php

namespace App\Repositories\Api\V1\Procedure;

use App\Models\Api\V1\Procedures;
use App\Repositories\Api\V1\BaseRepositoryContract;

interface ProcedureRepositoryContract extends BaseRepositoryContract
{
    public function getById(int $id): Procedures;
    public function all(): object;
    public function store(array $data): Procedures;
    public function updateById(array $data, int $id): Procedures;
    public function delete(int $id): void;
}