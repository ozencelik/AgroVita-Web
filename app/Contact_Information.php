<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact_Information extends Model
{
  protected $hidden = [
      'webAddress','fax','phoneNumber', 
  ];
}
