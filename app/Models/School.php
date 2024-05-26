<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'type_sch',
        'level_sch',
        'name_sch',
        'midd_sch_c',
        'state_sch',
        'midd_sign_g',
        'finac_sch',
        'graduat_sch',
        'situat',
        'f_scool',
        'user_id',
    ];
}
