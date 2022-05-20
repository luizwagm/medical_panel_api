<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class IncomeExpenses extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id_branch_unit',
        'id_current_account',
        'document_number',
        'control_panel',
        'description',
        'id_customer',
        'id_classification',
        'due_date',
        'discharge',
        'deposit',
        'administrate_tax',
        'observation',
        'type',
        'paid',
    ];

    public function branchUnit(): BelongsTo
    {
        return $this->belongsTo(BranchUnits::class);
    }

    public function currentAccount(): BelongsTo
    {
        return $this->belongsTo(CurrentAccounts::class);
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customers::class);
    }

    public function classification(): BelongsTo
    {
        return $this->belongsTo(Classifications::class);
    }
}
