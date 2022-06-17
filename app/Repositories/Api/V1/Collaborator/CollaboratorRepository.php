<?php

namespace App\Repositories\Api\V1\Collaborator;

use App\Models\Api\V1\Collaborators;
use App\Repositories\Api\V1\BaseRepository;

class CollaboratorRepository extends BaseRepository implements CollaboratorRepositoryContract
{
    public function __construct(
        protected Collaborators $model
    ) {}

    public function getById(int $id): Collaborators
    {
        return $this->model
            ->where('id', $id)
            ->first();
    }

    public function all(): object
    {
        return $this->model->get();
    }

    public function store(array $data): Collaborators
    {
        return $this->model->create($data);
    }

    public function updateById(array $data, int $id): Collaborators
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