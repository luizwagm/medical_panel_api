<?php

namespace App\Models\Api\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payments extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id_order',
        'id_form_payment',
        'due_date',
        'number_control',
        'description',
        'installments',
        'amount',
    ];

    public function formPayment(): BelongsTo
    {
        return $this->belongsTo(FormPayments::class);
    }
}
