<?php

namespace App\Services\Api\V1\Collaborator;

use App\Models\Api\V1\Collaborators;
use App\Repositories\Api\V1\Collaborator\CollaboratorRepositoryContract;
use App\Services\Api\V1\User\UserServiceContract;
use Illuminate\Database\Eloquent\Collection;

class CollaboratorService implements CollaboratorServiceContract
{
    public function __construct(
        protected CollaboratorRepositoryContract $repository,
        protected UserServiceContract $userService
    ) {}

    public function get(int $id): Collaborators
    {
        return $this->repository->getById($id);
    }
    
    public function all(): Collection
    {
        return $this->repository->all();
    }

    public function store(array $data): Collaborators
    {
        $user = $this->userService->create([
            'name' => $data['full_name'],
            'password' => password_hash($data['password'], PASSWORD_DEFAULT),
            'cpf' => $data['cpf']
        ]);

        $data['user_id'] = $user?->id;

        return $this->repository->create($data);
    }

    public function update(array $data, int $id): Collaborators
    {
        return $this->repository->updateById($data, $id);
    }

    public function delete(int $id): void
    {
        $collaborator = $this->repository->firstById($id);
        
        $this->userService->delete($collaborator?->user_id);

        $this->repository->delete($id);
    }
}