<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public $tablee = 'carts';

    protected $fillable = [
        'product_id',
        'quantity',
        'price',
        'user_id',
        'created_at',
        'updated_at'
    ];
}
