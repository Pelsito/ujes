<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'rol',
        'user_id',
    ];
    public function roles()
   {
     return $this->hasMany('App\Http\Models\Role');
   }    
}

