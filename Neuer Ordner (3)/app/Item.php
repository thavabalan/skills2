<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  public function categorz()
      {
          return $this->belongsTo('App\Categorz','cat_id');
      }
      public function level()
          {
              return $this->belongsTo('App\Level','lev_id');
          }
}
