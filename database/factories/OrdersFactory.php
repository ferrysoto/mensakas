<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Orders;
use Faker\Generator as Faker;

$factory->define(Orders::class, function (Faker $faker) {
    $payment = array('paypal', 'credit card', 'cash');
    return [
      'id_rider' =>   random_int(1,10),
      'id_lang' =>   1,
      'id_customer' =>   random_int(1,150),
      'id_address' =>   random_int(1,50),
      'current_state' =>   random_int(1,20),
      'payment' =>   $payment[random_int(0,2)],
      'total_paid' =>   random_int(1,60),
      'invoice_num' =>   random_int(1, 999999999),
      'created_at' => now(),
      'updated_at' => now(),
    ];
});
