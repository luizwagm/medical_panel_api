<?php

namespace App\Repositories\Api\V1\IncomeExpense;

use App\Models\Api\V1\IncomeExpenses;
use App\Repositories\Api\V1\BaseRepository;

class IncomeExpenseRepository extends BaseRepository implements IncomeExpenseRepositoryContract
{
    public function __construct(
        protected IncomeExpenses $model
    ) {}

    public function getById(int $id): IncomeExpenses
    {
        return $this->model
            ->where('id', $id)
            ->first();
    }

    public function all(): object
    {
        return $this->model->get();
    }

    public function store(array $data): IncomeExpenses
    {
        return $this->model->create($data);
    }

    public function updateById(array $data, int $id): IncomeExpenses
    {
        return $this->model
            ->where('id', $id)
            ->update($data);
    }

    public function delete(int $id): void
    {
        $this->model
            ->where('id', $id)
            ->delete();
    }
}