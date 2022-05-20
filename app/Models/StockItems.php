<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class StockItems extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id_item',
        'id_inventory_stock',
        'quantity',
        'unitary_value',
    ];

    public function item(): BelongsTo
    {
        return $this->belongsTo(Items::class);
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(InventoryStocks::class);
    }
}
