<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement_Win extends Model
{
  protected $fillable = [
      'advID', 'winUserID','winAmount','win_year',
  ];
}
