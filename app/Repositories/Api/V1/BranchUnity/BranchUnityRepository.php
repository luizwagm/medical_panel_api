<?php

namespace App\Repositories\Api\V1\BranchUnity;

use App\Models\Api\V1\BranchUnits;
use App\Repositories\Api\V1\BaseRepository;

class BranchUnityRepository extends BaseRepository implements BranchUnityRepositoryContract
{
    public function __construct(
        protected BranchUnits $model
    ) {}

    public function getById(int $id): BranchUnits
    {
        return $this->model
            ->where('id', $id)
            ->first();
    }

    public function all(): object
    {
        return $this->model->get();
    }

    public function store(array $data): BranchUnits
    {
        return $this->model->create($data);
    }

    public function updateById(array $data, int $id): BranchUnits
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