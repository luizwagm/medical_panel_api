<?php

namespace App\Services\Api\V1\InsertProcedure;

use App\Models\Api\V1\InsertProcedures;
use Illuminate\Database\Eloquent\Collection;

interface InsertProcedureServiceContract
{
    public function get(int $id): InsertProcedures;
    public function all(): Collection;
    public function store(array $data): InsertProcedures;
    public function update(array $data, int $id): InsertProcedures;
    public function delete(int $id): void;
}