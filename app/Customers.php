<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
  public $timestamps = false;

  protected $table = 'customers';

  protected $fillable = [
      'id_lang', 'id_address', 'phone', 'email', 'first_name', 'last_name', 'is_guest',
  ];
}
