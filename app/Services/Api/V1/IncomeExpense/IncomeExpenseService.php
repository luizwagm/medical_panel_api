<?php

namespace App\Services\Api\V1\IncomeExpense;

use App\Models\Api\V1\IncomeExpenses;
use App\Repositories\Api\V1\IncomeExpense\IncomeExpenseRepositoryContract;
use Illuminate\Database\Eloquent\Collection;

class IncomeExpenseService implements IncomeExpenseServiceContract
{
    public function __construct(
        protected IncomeExpenseRepositoryContract $repository
    ) {}

    public function get(int $id): IncomeExpenses
    {
        return $this->repository->getById($id);
    }

    public function all(): Collection
    {
        return $this->repository->all();
    }

    public function store(array $data): IncomeExpenses
    {
        return $this->repository->store($data);
    }

    public function update(array $data, int $id): IncomeExpenses
    {
        return $this->repository->updateById($data, $id);
    }

    public function delete(int $id): void
    {
        $this->repository->delete($id);
    }
}