<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class domains_result extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'domain_id',
        'result'        
  
    ];
}
