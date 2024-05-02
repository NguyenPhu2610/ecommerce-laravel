<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CartItem extends Model
{
    use HasFactory;

    protected $table = 'cart_item';

    public function cart(): HasOne
    {
        return $this->hasOne(Cart::class);
    }

    public function product(): HasOne
    {
        return $this->hasOne(InnerProduct::class);
    }
}
