<?php

namespace App\Repositories\Api\V1\CurrentAccount;

use App\Models\Api\V1\CurrentAccounts;
use App\Repositories\Api\V1\BaseRepository;

class CurrentAccountRepository extends BaseRepository implements CurrentAccountRepositoryContract
{
    public function __construct(
        protected CurrentAccounts $model
    ) {}

    public function getById(int $id): CurrentAccounts
    {
        return $this->model
            ->where('id', $id)
            ->first();
    }

    public function all(): object
    {
        return $this->model->get();
    }

    public function store(array $data): CurrentAccounts
    {
        return $this->model->create($data);
    }

    public function updateById(array $data, int $id): CurrentAccounts
    {
        return $this->model
            ->where('id', $id)
            ->update($data);
    }

    public function delete(int $id): void
    {
        $this->model
            ->where('id', $id)
            ->delete();
    }
}