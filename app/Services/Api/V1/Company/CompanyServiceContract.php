<?php

namespace App\Services\Api\V1\Company;

use Illuminate\Database\Eloquent\Collection;

interface CompanyServiceContract
{
    public function get();
    public function store(array $data);
    // public function storeAddress(array $data);
    // public function storeContact(array $data);
    public function update(array $data);
    // public function updateAddress(array $data, int $id);
    // public function updateContact(array $data, int $id);
    public function delete(): void;
    // public function deleteAddress(int $id): void;
    // public function deleteContact(int $id): void;
}