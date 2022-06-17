<?php

namespace App\Services\Api\V1\User;

use App\Models\Api\V1\Users;
use Illuminate\Database\Eloquent\Collection;

interface UserServiceContract
{
    public function get(int $id): Users;
    public function all(): Collection;
    public function store(array $data): Users;
    public function update(array $data, int $id): Users;
    public function delete(int $id): void;
}