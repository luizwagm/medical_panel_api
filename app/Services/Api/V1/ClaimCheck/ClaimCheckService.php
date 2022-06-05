<?php

namespace App\Services\Api\V1\ClaimCheck;

use App\Models\Api\V1\ClaimChecks;
use App\Repositories\Api\V1\ClaimCheck\ClaimCheckRepositoryContract;
use Illuminate\Database\Eloquent\Collection;

class ClaimCheckService implements ClaimCheckServiceContract
{
    public function __construct(
        protected ClaimCheckRepositoryContract $repository
    ) {}

    public function get(int $id): ClaimChecks
    {
        return $this->repository->getById($id);
    }

    public function all(): Collection
    {
        return $this->repository->all();
    }

    public function store(array $data): ClaimChecks
    {
        return $this->repository->store($data);
    }

    public function update(array $data, int $id): ClaimChecks
    {
        return $this->repository->updateById($data, $id);
    }

    public function delete(int $id): void
    {
        $this->repository->delete($id);
    }
}