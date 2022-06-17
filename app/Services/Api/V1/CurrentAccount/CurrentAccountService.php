<?php

namespace App\Services\Api\V1\CurrentAccount;

use App\Models\Api\V1\CurrentAccounts;
use App\Repositories\Api\V1\CurrentAccount\CurrentAccountRepositoryContract;
use Illuminate\Database\Eloquent\Collection;

class CurrentAccountService implements CurrentAccountServiceContract
{
    public function __construct(
        protected CurrentAccountRepositoryContract $repository
    ) {}

    public function get(int $id): CurrentAccounts
    {
        return $this->repository->getById($id);
    }

    public function all(): Collection
    {
        return $this->repository->all();
    }

    public function store(array $data): CurrentAccounts
    {
        return $this->repository->store($data);
    }

    public function update(array $data, int $id): CurrentAccounts
    {
        return $this->repository->updateById($data, $id);
    }

    public function delete(int $id): void
    {
        $this->repository->delete($id);
    }
}