<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sale_details extends Model
{
    use HasFactory;
    protected $fillable = [ 'product_code', 'product_name', 'unit' , 'tax', 'sale_price', 'nos', 'tottax', 'total'];
}
