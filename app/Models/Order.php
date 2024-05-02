<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function item(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}
