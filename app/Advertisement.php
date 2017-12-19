<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
  protected $fillable = [
      'sectorName', 'advType', 'advTitle','advExplanation','sectorID','unitID','close_year','start_year',
  ];
}
