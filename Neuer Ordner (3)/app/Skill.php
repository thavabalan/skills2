<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Skill;
class Skill extends Model
{
  public function company()
  {
    return $this->belongsToMany('App\Company');

  }
  public function candidate()
  {
    return $this->belongsToMany('App\Candidate');

  }
}
