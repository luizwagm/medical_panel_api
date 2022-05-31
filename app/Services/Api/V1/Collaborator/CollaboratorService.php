<?php

namespace App\Services\Api\V1\Collaborator;

use App\Repositories\Api\V1\Collaborator\CollaboratorRepositoryContract;

class CollaboratorService implements CollaboratorServiceContract
{
    public function __construct(
        protected CollaboratorRepositoryContract $repository
    ) {}

    public function get()
    {
        return $this->repository->getById(1);
    }

    public function all()
    {
        return $this->repository->all();
    }

    public function store()
    {
        return $this->repository->store([]);
    }

    public function update()
    {
        return $this->repository->updateById([], 1);
    }

    public function delete()
    {
        return $this->repository->delete(1);
    }
}