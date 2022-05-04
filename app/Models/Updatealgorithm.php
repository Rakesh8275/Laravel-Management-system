<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Updatealgorithm extends Model
{
    use HasFactory;
    protected $fillable = ['billinvoice','nos', 'unit', 'updatedate'];
}
