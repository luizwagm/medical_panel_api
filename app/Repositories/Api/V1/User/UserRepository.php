<?php

namespace App\Repositories\Api\V1\User;

use App\Models\Api\V1\Users;
use App\Repositories\Api\V1\BaseRepository;

class UserRepository extends BaseRepository implements UserRepositoryContract
{
    public function __construct(
        protected Users $model
    ) {}

    public function getById(int $id): Users
    {
        return $this->model
            ->where('id', $id)
            ->first();
    }

    public function all(): object
    {
        return $this->model->get();
    }

    public function store(array $data): Users
    {
        return $this->model->create($data);
    }

    public function updateById(array $data, int $id): Users
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