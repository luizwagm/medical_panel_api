<?php

namespace App\Repositories\Api\V1\InsertProcedure;

use App\Models\Api\V1\InsertProcedures;
use App\Repositories\Api\V1\BaseRepository;

class InsertProcedureRepository extends BaseRepository implements InsertProcedureRepositoryContract
{
    public function __construct(
        protected InsertProcedures $model
    ) {}

    public function getById(int $id): InsertProcedures
    {
        return $this->model
            ->where('id', $id)
            ->first();
    }

    public function all(): object
    {
        return $this->model->get();
    }

    public function store(array $data): InsertProcedures
    {
        return $this->model->create($data);
    }

    public function updateById(array $data, int $id): InsertProcedures
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