<?php

namespace App\Models\Api\V1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'chat_id',
        'user_id',
        'text',
        'status',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(Users::class);
    }

    public function chat(): BelongsTo
    {
        return $this->belongsTo(Negotiation::class);
    }
}
