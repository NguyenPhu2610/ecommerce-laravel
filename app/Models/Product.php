<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function innerProduct(): HasMany
    {
        return $this->hasMany(InnerProduct::class);
    }

    public function rating(): HasMany
    {
        return $this->hasMany(Rating::class);
    }

    public function brand(): HasOne
    {
        return $this->hasOne(Brand::class);
    }

    public function category(): HasOne
    {
        return $this->hasOne(Category::class);
    }


}
