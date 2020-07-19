<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class link extends Model
{
    //

    public function volunteers(){
      return $this->hasMany('App\volunteer');
    }
}
