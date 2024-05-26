<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'count_id',
        'name',
    ];
      public function countries()
    {
        return $this->belongsTo('App\Http\Models\Country');
    }
      
      public function cities() 
      {
        return $this->hasMany('App\Http\Models\City');
      }       
}
