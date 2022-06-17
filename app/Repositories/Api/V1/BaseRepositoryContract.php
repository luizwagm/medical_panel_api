<?php

namespace App\Repositories\Api\V1;


interface BaseRepositoryContract
{
    public function getById(int $id);
    public function all();
    public function getByAttribute(string $field, string $attribute);
    public function store(array $data);
    public function updateById(array $data, int $id);
    public function getWithRelation(string $relation);
}