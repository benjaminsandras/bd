<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
   public function BD()
    {
        return $this->belongsToMany('App\BD', 'contient', 'id', 'bd_id');
    }
}
