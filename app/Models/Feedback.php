<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedbacks';

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function product(): HasOne
    {
        return $this->hasOne(InnerProduct::class);
    }
}
