<?php

namespace App\Repositories\Api\V1\Collaborator;

use App\Models\Api\V1\Collaborators;
use App\Repositories\Api\V1\BaseRepository;

class CollaboratorRepository extends BaseRepository implements CollaboratorRepositoryContract
{
    public function __construct(
        protected Collaborators $model
    ) {}

    public function get()
    {
        return ['teste' => 'luiz'];
    }
}