<?php

namespace App\Services\Api\V1\Company;

use App\Models\Api\V1\Company;

interface CompanyServiceContract
{
    public function get();
    public function store(array $data): Company;
    public function delete(): void;
}