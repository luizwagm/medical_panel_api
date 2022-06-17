<?php

namespace App\Services\Api\V1\Item;

use App\Models\Api\V1\Items;
use App\Repositories\Api\V1\Item\ItemRepositoryContract;
use Illuminate\Database\Eloquent\Collection;

class ItemService implements ItemServiceContract
{
    public function __construct(
        protected ItemRepositoryContract $repository
    ) {}

    public function get(int $id): Items
    {
        return $this->repository->getById($id);
    }

    public function all(): Collection
    {
        return $this->repository->all();
    }

    public function store(array $data): Items
    {
        return $this->repository->store($data);
    }

    public function update(array $data, int $id): Items
    {
        return $this->repository->updateById($data, $id);
    }

    public function delete(int $id): void
    {
        $this->repository->delete($id);
    }
}