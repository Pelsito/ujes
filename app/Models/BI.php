<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BI extends Model
{
    use HasFactory;
    protected $fillable = 
      [
        'bi',
        'f_bi',
        'user_id',    
      ];
}
