<?php

namespace App\Repositories\Api\V1\CurrentAccount;

use App\Models\Api\V1\CurrentAccounts;
use App\Repositories\Api\V1\BaseRepositoryContract;

interface CurrentAccountRepositoryContract extends BaseRepositoryContract
{
    public function getById(int $id): CurrentAccounts;
    public function all(): object;
    public function store(array $data): CurrentAccounts;
    public function updateById(array $data, int $id): CurrentAccounts;
    public function delete(int $id): void;
}