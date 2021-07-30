<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class age extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'age_text'
  
    ];
}
