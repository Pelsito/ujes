<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = 
    [
    'name_rol',
    'code_rol',
    ];
    public function rols()
    {
        return $this->belongsTo('App\Http\Models\Rol');
    }
}
