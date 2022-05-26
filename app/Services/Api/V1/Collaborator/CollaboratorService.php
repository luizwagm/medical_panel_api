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
        return $this->repository->get();
    }

    public function getAll()
    {

    }

    public function store()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}