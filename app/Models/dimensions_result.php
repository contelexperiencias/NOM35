<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dimensions_result extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'dimension_id',
        'result'       
  
    ];
}
