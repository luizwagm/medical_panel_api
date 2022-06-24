<?php

namespace App\Services\Api\V1\User;

use App\Models\Api\V1\Users;
use App\Repositories\Api\V1\User\UserRepositoryContract;
use Illuminate\Database\Eloquent\Collection;

class UserService implements UserServiceContract
{
    public function __construct(
        protected UserRepositoryContract $repository
    ) {}

    public function get(int $id): Users
    {
        return $this->repository->getById($id);
    }

    public function all(): Collection
    {
        return $this->repository->all();
    }

    public function store(array $data): Users
    {
        return $this->repository->store($data);
    }

    public function create(array $data): Users
    {
        return $this->repository->store($data);
    }

    public function update(array $data, int $id): Users
    {
        return $this->repository->updateById($data, $id);
    }

    public function delete(int $id): void
    {
        $this->repository->delete($id);
    }
}