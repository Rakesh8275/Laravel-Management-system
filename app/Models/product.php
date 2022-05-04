<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = ['product_name', 'unit', 'sale_price', 'price', 'hsnc', 'product_code', 'igst', 'cgst', 'sgst', 'cess', 'inventory'];
}
