<?php

namespace App\Services\Api\V1\CurrentAccount;

use App\Models\Api\V1\CurrentAccounts;
use Illuminate\Database\Eloquent\Collection;

interface CurrentAccountServiceContract
{
    public function get(int $id): CurrentAccounts;
    public function all(): Collection;
    public function store(array $data): CurrentAccounts;
    public function update(array $data, int $id): CurrentAccounts;
    public function delete(int $id): void;
}