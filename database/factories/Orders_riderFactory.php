<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Orders_rider;
use Faker\Generator as Faker;

$autoIncrementOrder = autoIncrementOrder();
$autoIncrementInvoice = autoIncrementInvoice();

$factory->define(Orders_rider::class, function (Faker $faker) use ($autoIncrementOrder, $autoIncrementInvoice) {
    return [
      'id_order' =>   $autoIncrementOrder->current(),
      'id_rider' =>   DB::table('riders')->inRandomOrder()->value('id_rider'),
      'id_order_invoice' =>   $autoIncrementInvoice->current(),
    ];
});

function autoIncrementInvoice()
{
  for ($i = 1; $i <= DB::table('invoices')->count(); $i++) {
    yield $i;
  }
}
function autoIncrementOrder()
{
  for ($i = 1; $i <= DB::table('orders')->count(); $i++) {
    yield $i;
  }
}
