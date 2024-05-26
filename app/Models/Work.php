<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    protected $fillable = [
        'work',
        'work_p',
        'work_n',
        'profes',
        'f_work',
        'user_id',
    ];
}
