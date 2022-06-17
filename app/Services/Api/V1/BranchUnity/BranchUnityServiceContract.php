<?php

namespace App\Services\Api\V1\BranchUnity;

use App\Models\Api\V1\BranchUnits;
use Illuminate\Database\Eloquent\Collection;

interface BranchUnityServiceContract
{
    public function get(int $id): BranchUnits;
    public function all(): Collection;
    public function store(array $data): BranchUnits;
    public function update(array $data, int $id): BranchUnits;
    public function delete(int $id): void;
}