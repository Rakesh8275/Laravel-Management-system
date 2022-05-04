<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = ['date','sale_type', 'bill', 'customer_type', 'customer_name', 'billing_name', 'gstin', 'state', 'contact', 'lane', 'district' ];
}

