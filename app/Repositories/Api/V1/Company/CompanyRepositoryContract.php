<?php

namespace App\Repositories\Api\V1\Company;

use App\Models\Api\V1\Company;
use App\Repositories\Api\V1\BaseRepositoryContract;

interface CompanyRepositoryContract extends BaseRepositoryContract
{
    public function get(): Company;
    public function store(array $data): Company;
    public function update(array $data): Company;
    public function delete(): void;
}