<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class InsertProcedures extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id_order',
        'id_procedure',
        'quantity',
        'amount',
        'total',
    ];

    public function procedure(): BelongsTo
    {
        return $this->belongsTo(Procedures::class);
    }
}
