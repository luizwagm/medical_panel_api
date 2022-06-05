<?php

namespace App\Services\Api\V1\IncomeExpense;

use App\Models\Api\V1\IncomeExpenses;
use Illuminate\Database\Eloquent\Collection;

interface IncomeExpenseServiceContract
{
    public function get(int $id): IncomeExpenses;
    public function all(): Collection;
    public function store(array $data): IncomeExpenses;
    public function update(array $data, int $id): IncomeExpenses;
    public function delete(int $id): void;
}