<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Messages;
use Faker\Generator as Faker;

$autoIncrement = autoIncrement();

$factory->define(Messages::class, function (Faker $faker) use ($autoIncrement) {
  $autoIncrement->next();
    return [
      'id_order' =>   $autoIncrement->current(),
      'id_supplier' =>   DB::table('suppliers')->inRandomOrder()->value('id_supplier'),
      'id_rider' =>   DB::table('riders')->inRandomOrder()->value('id_rider'),
      'message' =>   $faker->text,
    ];
});

function autoIncrement()
{
  for ($i = 0; $i <= DB::table('orders')->count(); $i++) {
    yield $i;
  }
}
