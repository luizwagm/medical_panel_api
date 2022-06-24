<?php

namespace App\Repositories\Api\V1\Collaborator;

use App\Models\Api\V1\Collaborators;
use App\Repositories\Api\V1\BaseRepositoryContract;

interface CollaboratorRepositoryContract extends BaseRepositoryContract
{
    public function getById(int $id): Collaborators;
    public function all(): object;
    public function create(array $data): Collaborators;
    public function updateById(array $data, int $id): Collaborators;
    public function delete(int $id): void;
}