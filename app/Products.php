<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
  protected $fillable = [
      'proName','imagePath', 'description', 'price', 'typeID','unit','unitID',
  ];
}
