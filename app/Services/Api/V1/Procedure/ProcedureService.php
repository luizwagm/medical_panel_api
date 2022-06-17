<?php

namespace App\Services\Api\V1\Procedure;

use App\Models\Api\V1\Procedures;
use App\Repositories\Api\V1\Procedure\ProcedureRepositoryContract;
use Illuminate\Database\Eloquent\Collection;

class ProcedureService implements ProcedureServiceContract
{
    public function __construct(
        protected ProcedureRepositoryContract $repository
    ) {}

    public function get(int $id): Procedures
    {
        return $this->repository->getById($id);
    }

    public function all(): Collection
    {
        return $this->repository->all();
    }

    public function store(array $data): Procedures
    {
        return $this->repository->store($data);
    }

    public function update(array $data, int $id): Procedures
    {
        return $this->repository->updateById($data, $id);
    }

    public function delete(int $id): void
    {
        $this->repository->delete($id);
    }
}