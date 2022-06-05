<?php

namespace App\Services\Api\V1\Procedure;

use App\Models\Api\V1\Procedures;
use Illuminate\Database\Eloquent\Collection;

interface ProcedureServiceContract
{
    public function get(int $id): Procedures;
    public function all(): Collection;
    public function store(array $data): Procedures;
    public function update(array $data, int $id): Procedures;
    public function delete(int $id): void;
}