<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class domain extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'domain',
        'domain_values'        
  
    ];
}
