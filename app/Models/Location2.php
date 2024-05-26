<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location2 extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'state_re',
        'city_re',
        'address',
        'user_id',
    ];
}
