<?php

namespace App\Repositories\Api\V1\InsertProcedure;

use App\Models\Api\V1\InsertProcedures;
use App\Repositories\Api\V1\BaseRepositoryContract;

interface InsertProcedureRepositoryContract extends BaseRepositoryContract
{
    public function getById(int $id): InsertProcedures;
    public function all(): object;
    public function store(array $data): InsertProcedures;
    public function updateById(array $data, int $id): InsertProcedures;
    public function delete(int $id): void;
}