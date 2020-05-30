<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorz extends Model
{
  protected $table = 'categorzs';
  public function items()
      {
          return $this->hasMany('App\Item');
      }
}
