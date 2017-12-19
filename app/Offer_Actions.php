<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer_Actions extends Model
{
  protected $hidden = [
      'offerID', 'confirmation','offerAmount','offer_year',
  ];
}
