<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $casts=[
        'Images',
    ];
    protected $fillable=['Name','Avatar','Description','SalePrice','Weight','StockQuantity'];


}
