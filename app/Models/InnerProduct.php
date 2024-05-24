<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class InnerProduct extends Model
{
    use HasFactory;

    protected $table = 'inner_product';

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
