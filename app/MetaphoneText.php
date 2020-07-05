<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetaphoneText extends Model
{
    public function getBlog(){
      return $this->belongsTo('App\Blog','blog_id');
    }
    
}
