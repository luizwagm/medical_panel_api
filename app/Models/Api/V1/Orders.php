<?php

namespace App\Models\Api\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orders extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'invoice_code',
        'id_branch_unit',
        'guide_number',
        'date',
        'id_customer',
        'claim_check',
        'invoice',
        'agreement_table',
        'id_collaborator',
        'observation',
        'type',
    ];

    public function branchUnit(): BelongsTo
    {
        return $this->belongsTo(BranchUnits::class);
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customers::class);
    }

    public function collaborator(): BelongsTo
    {
        return $this->belongsTo(Collaborators::class);
    }
}
