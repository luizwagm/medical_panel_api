<?php

namespace App\Repositories\Api\V1\Classification;

use App\Models\Api\V1\Classifications;
use App\Repositories\Api\V1\BaseRepository;

class ClassificationRepository extends BaseRepository implements ClassificationRepositoryContract
{
    public function __construct(
        protected Classifications $model
    ) {}

    public function getById(int $id): Classifications
    {
        return $this->model
            ->where('id', $id)
            ->first();
    }

    public function all(): object
    {
        return $this->model->get();
    }

    public function store(array $data): Classifications
    {
        return $this->model->create($data);
    }

    public function updateById(array $data, int $id): Classifications
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