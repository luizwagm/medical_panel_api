<?php

namespace App\Services\Api\V1\Company;

use App\Models\Api\V1\Company;

interface CompanyServiceContract
{
    public function get(): Company;
    public function store(array $data): Company;
    public function update(array $data): Company;
    public function delete(): void;
}