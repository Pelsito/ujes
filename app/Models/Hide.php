<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hide extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'unite_o',
        'espec',
        'periodo',
        'time',
        'sp_educ',
        'user_id',
    ];
}
