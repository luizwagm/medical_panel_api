<?php

namespace App\Repositories\Api\V1\Company;

use App\Models\Api\V1\Company;
use App\Repositories\Api\V1\BaseRepository;

class CompanyRepository extends BaseRepository implements CompanyRepositoryContract
{
    public function __construct(
        protected Company $model
    ) {}

    public function get(): Company
    {
        return $this->model->first();
    }

    public function store(array $data): Company
    {
        return $this->model->create($data);
    }

    public function update(array $data): Company
    {
        $this->model
            ->first()
            ->update($data);

        return $this->model->first();
    }

    public function delete(): void
    {
        $this->model
            ->first()
            ->delete();
    }
}