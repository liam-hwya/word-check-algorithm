<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $dates = [
      'created_at',
      'updated_at',
  ];

    public function category(){
      return $this->belongsTo('App\Category');
    }

    public function metaphoneText(){
      return $this->hasOne('App\MetaphoneText');
    }
    
    
}
