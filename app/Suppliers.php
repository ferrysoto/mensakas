<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
  protected $table = 'suppliers';
  protected $fillable = [
      'id_address', 'phone', 'email', 'name','id_category_supplier',
  ];

}
