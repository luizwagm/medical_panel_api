<?php

namespace App\Services\Api\V1\Company;

use App\Models\Api\V1\Company;
use App\Repositories\Api\V1\Company\CompanyRepositoryContract;

class CompanyService implements CompanyServiceContract
{
    public function __construct(
        protected CompanyRepositoryContract $repository
    ) {}

    public function get(): Company
    {
        return $this->repository->get();
    }

    public function store(array $data): Company
    {
        return $this->repository->store($data);
    }

    public function update(array $data): Company
    {
        return $this->repository->update($data);
    }

    public function delete(): void
    {
        $this->repository->delete();
    }
}