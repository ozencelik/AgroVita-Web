<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales_Manager extends Model
{
  protected $fillable = [
      'sName', 'email', 'userID',
  ];
}
