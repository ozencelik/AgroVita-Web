<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commercial_Information extends Model
{
  protected $hidden = [
      'userID','comRNo','chamberComNo','taxID', 
  ];
}
