<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable =[
        'name',
        'category_id',
        'unit_price',
        'qty_in_stock',
    ];
}
