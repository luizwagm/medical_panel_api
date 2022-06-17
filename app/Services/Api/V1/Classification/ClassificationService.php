<?php

namespace App\Services\Api\V1\Classification;

use App\Models\Api\V1\Classifications;
use App\Repositories\Api\V1\Classification\ClassificationRepositoryContract;
use Illuminate\Database\Eloquent\Collection;

class ClassificationService implements ClassificationServiceContract
{
    public function __construct(
        protected ClassificationRepositoryContract $repository
    ) {}

    public function get(int $id): Classifications
    {
        return $this->repository->getById($id);
    }

    public function all(): Collection
    {
        return $this->repository->all();
    }

    public function store(array $data): Classifications
    {
        return $this->repository->store($data);
    }

    public function update(array $data, int $id): Classifications
    {
        return $this->repository->updateById($data, $id);
    }

    public function delete(int $id): void
    {
        $this->repository->delete($id);
    }
}