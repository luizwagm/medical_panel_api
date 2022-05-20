<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class InventoryStocks extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'type',
        'date',
        'id_branch_unit',
        'id_customer',
        'document_number',
        'amount',
        'installments',
        'first_salary',
        'observations',
    ];

    public function branchUnit(): BelongsTo
    {
        return $this->belongsTo(BranchUnits::class);
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customers::class);
    }
}
