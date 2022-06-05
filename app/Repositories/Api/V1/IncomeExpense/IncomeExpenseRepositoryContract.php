<?php

namespace App\Repositories\Api\V1\IncomeExpense;

use App\Models\Api\V1\IncomeExpenses;
use App\Repositories\Api\V1\BaseRepositoryContract;

interface IncomeExpenseRepositoryContract extends BaseRepositoryContract
{
    public function getById(int $id): IncomeExpenses;
    public function all(): object;
    public function store(array $data): IncomeExpenses;
    public function updateById(array $data, int $id): IncomeExpenses;
    public function delete(int $id): void;
}