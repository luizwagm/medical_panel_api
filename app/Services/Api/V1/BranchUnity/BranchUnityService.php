<?php

namespace App\Services\Api\V1\BranchUnity;

use App\Models\Api\V1\BranchUnits;
use App\Repositories\Api\V1\BranchUnity\BranchUnityRepositoryContract;
use Illuminate\Database\Eloquent\Collection;

class BranchUnityService implements BranchUnityServiceContract
{
    public function __construct(
        protected BranchUnityRepositoryContract $repository
    ) {}

    public function get(int $id): BranchUnits
    {
        return $this->repository->getById($id);
    }

    public function all(): Collection
    {
        return $this->repository->all();
    }

    public function store(array $data): BranchUnits
    {
        return $this->repository->store($data);
    }

    public function update(array $data, int $id): BranchUnits
    {
        return $this->repository->updateById($data, $id);
    }

    public function delete(int $id): void
    {
        $this->repository->delete($id);
    }
}