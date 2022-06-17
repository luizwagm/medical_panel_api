<?php

namespace App\Services\Api\V1\ClaimCheck;

use App\Models\Api\V1\ClaimChecks;
use Illuminate\Database\Eloquent\Collection;

interface ClaimCheckServiceContract
{
    public function get(int $id): ClaimChecks;
    public function all(): Collection;
    public function store(array $data): ClaimChecks;
    public function update(array $data, int $id): ClaimChecks;
    public function delete(int $id): void;
}