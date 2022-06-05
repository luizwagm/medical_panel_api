<?php

namespace App\Services\Api\V1\Collaborator;

use App\Models\Api\V1\Collaborators;
use App\Repositories\Api\V1\Collaborator\CollaboratorRepositoryContract;
use Illuminate\Database\Eloquent\Collection;

class CollaboratorService implements CollaboratorServiceContract
{
    public function __construct(
        protected CollaboratorRepositoryContract $repository
    ) {}

    public function get(int $id): Collaborators
    {
        return $this->repository->getById($id);
    }

    public function all(): Collection
    {
        return $this->repository->all();
    }

    public function store(array $data): Collaborators
    {
        return $this->repository->store($data);
    }

    public function update(array $data, int $id): Collaborators
    {
        return $this->repository->updateById($data, $id);
    }

    public function delete(int $id): void
    {
        $this->repository->delete($id);
    }
}