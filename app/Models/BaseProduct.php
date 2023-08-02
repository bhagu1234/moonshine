<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'product_name'       
    ];
    protected $table='base_products';
    

}
