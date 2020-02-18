<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Orders_history;
use Faker\Generator as Faker;
$autoIncrementOrder = autoIncrementOrder();
$factory->define(Orders_history::class, function (Faker $faker) use ($autoIncrementOrder){
    return [
      'id_order' =>  $autoIncrementOrder->current(),
      'id_user' =>   random_int(1,50),
      'id_order_state' =>   random_int(1,20),
    ];
});
