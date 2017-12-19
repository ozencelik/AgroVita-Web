<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
  protected $fillable = [
      'userID', 'townID','cityID','districtID',
  ];
}
