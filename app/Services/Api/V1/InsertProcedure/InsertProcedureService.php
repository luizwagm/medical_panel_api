<?php

namespace App\Services\Api\V1\InsertProcedure;

use App\Models\Api\V1\InsertProcedures;
use App\Repositories\Api\V1\InsertProcedure\InsertProcedureRepositoryContract;
use Illuminate\Database\Eloquent\Collection;

class InsertProcedureService implements InsertProcedureServiceContract
{
    public function __construct(
        protected InsertProcedureRepositoryContract $repository
    ) {}

    public function get(int $id): InsertProcedures
    {
        return $this->repository->getById($id);
    }

    public function all(): Collection
    {
        return $this->repository->all();
    }

    public function store(array $data): InsertProcedures
    {
        return $this->repository->store($data);
    }

    public function update(array $data, int $id): InsertProcedures
    {
        return $this->repository->updateById($data, $id);
    }

    public function delete(int $id): void
    {
        $this->repository->delete($id);
    }
}