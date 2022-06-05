<?php

namespace App\Services\Api\V1\Classification;

use App\Models\Api\V1\Classifications;
use Illuminate\Database\Eloquent\Collection;

interface ClassificationServiceContract
{
    public function get(int $id): Classifications;
    public function all(): Collection;
    public function store(array $data): Classifications;
    public function update(array $data, int $id): Classifications;
    public function delete(int $id): void;
}