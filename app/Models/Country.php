<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = 
    [
     'id',
     'name',
    ];

    public function states()
   {
     return $this->hasMany('App\Http\Models\State');
   }                                              

   public function cities() 
   {
    return $this->hasManyThrough('App\Http\Models\City', 'App\Http\Models\State');
    }
}
