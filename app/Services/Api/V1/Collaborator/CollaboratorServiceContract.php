<?php

namespace App\Services\Api\V1\Collaborator;

use App\Models\Api\V1\Collaborators;
use Illuminate\Database\Eloquent\Collection;

interface CollaboratorServiceContract
{
    public function get(int $id): Collaborators;
    public function all(): Collection;
    public function store(array $data): Collaborators;
    public function update(array $data, int $id): Collaborators;
    public function delete(int $id): void;
}