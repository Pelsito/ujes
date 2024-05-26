<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = 
      [
        'stat_id',
        'name',    
      ];
    
    public function states() 
      {
         return $this->belongsTo('App\Http\Models\State');
      }
                    
    // Should you ever need this State's Country
    public function countCity() 
      {
         return $this->states->countCity;
      }
}
