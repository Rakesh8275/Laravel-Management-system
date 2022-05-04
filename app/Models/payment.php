<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'payment_id', 'user_id','amount', 'date','sale_type','bill','customer_type','customer_name','billing_name','gstin','state','contact','district','lane','product_code','product_name','tax','unit','nos','rate','tottax','total',
    ];
}