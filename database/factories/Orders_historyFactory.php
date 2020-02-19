<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Orders_history;
use Faker\Generator as Faker;
$autoOrder = autoOrder();
$factory->define(Orders_history::class, function (Faker $faker) use ($autoOrder){
    return [
      'id_order' =>  $autoOrder->current(),
      'id_user' =>   random_int(1,50),
      'id_order_state' =>   random_int(1,20),
    ];
});

function autoOrder()
{
  for ($i = 1; $i <= DB::table('orders')->count(); $i++) {
    yield $i;
  }
}
