<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    protected $fillable = ['customer_name', 'customer_code', 'shop_name', 'house_code', 'hsnc', 'product_code', 'lane', 'area', 'pincode', 'gstin', 'phone1', 'phone2', 'op_balance', 'credit_balance'];
}

