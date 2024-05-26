<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'gender',
        'name_f1',
        'name_f2',
        'lastn_f1',
        'lastn_f2',
        'name_m1',
        'name_m2',
        'lastn_m1',
        'lastn_m2',
        'user_id',
    ];
}
