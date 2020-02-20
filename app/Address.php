<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
  protected $table = 'address';

  protected $fillable = [
      'id_state', 'address', 'city', 'zipcode', 'active', 'deleted',
  ];
}
