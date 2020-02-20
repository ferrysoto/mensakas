<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Invoices;
use Faker\Generator as Faker;

$factory->define(Invoices::class, function (Faker $faker) {
    return [
      'id_order' =>    DB::table('orders')->inRandomOrder()->value('id_order'),
      'id_customer' =>   random_int(1, 150),
      'number' =>   random_int(1,9999),
      'total_paid' =>   random_int(1, 60),
      'tax_rule' =>   1,

      'created_at' => now(),
      'updated_at' => now(),
    ];
});
