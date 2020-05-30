<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    public function skills()
    {
      return $this->belongsToMany('App\Skill');

    }
}
