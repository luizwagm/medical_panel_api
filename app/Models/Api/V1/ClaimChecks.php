<?php

namespace App\Models\Api\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClaimChecks extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id_order',
        'header',
        'emitter',
        'amount',
        'date',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Orders::class);
    }
}
