<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'name1',
        'name2',
        'lastn1',
        'lastn2',
        'user_id',
    ];
}
