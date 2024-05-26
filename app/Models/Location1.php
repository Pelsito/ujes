<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location1 extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'country_id',
        'state_id',
        'city_id',
        'birthdate',
        'age',
        'g_age',
        'status',
        'phone',
        'user_id'
    ];
}
