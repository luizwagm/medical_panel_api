<?php

namespace App\Repositories\Api\V1\Collaborator;

use App\Repositories\Api\V1\BaseRepositoryContract;

interface CollaboratorRepositoryContract extends BaseRepositoryContract
{
    public function get();
}