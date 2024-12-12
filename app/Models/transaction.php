<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'purchase',
        'initial_price',
        'discount',
        'final_price',
        'total_prize',
        'status'
    ];
}
