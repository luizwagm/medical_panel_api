<?php

namespace App\Repositories\Api\V1\ClaimCheck;

use App\Models\Api\V1\ClaimChecks;
use App\Repositories\Api\V1\BaseRepository;

class ClaimCheckRepository extends BaseRepository implements ClaimCheckRepositoryContract
{
    public function __construct(
        protected ClaimChecks $model
    ) {}

    public function getById(int $id): ClaimChecks
    {
        return $this->model
            ->where('id', $id)
            ->first();
    }

    public function all(): object
    {
        return $this->model->get();
    }

    public function store(array $data): ClaimChecks
    {
        return $this->model->create($data);
    }

    public function updateById(array $data, int $id): ClaimChecks
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