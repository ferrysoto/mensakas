<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Orders_details;
use Faker\Generator as Faker;
$autoOrd = autoOrd();
$autoInv = autoInv();

$factory->define(Orders_details::class, function (Faker $faker) use ($autoOrd, $autoInv) {
  $product = array('arroz', 'sushi', 'ramen');
    return [
      'id_order' =>  $autoOrd->current(),
      'id_order_invoice' =>  $autoInv->current(),
      'id_supplier' =>   random_int(1,5),
      'id_product' =>   random_int(1,5),
      'product_name' =>   $product[random_int(0,2)],
      'product_price' =>   10,
      'product_quantity' =>   2,
      'id_tax_rule' =>   1,
      'total_price' =>   20,
    ];
});
function autoInv()
{
  for ($i = 1; $i <= DB::table('invoices')->count(); $i++) {
    yield $i;
  }
}
function autoOrd()
{
  for ($i = 1; $i <= DB::table('orders')->count(); $i++) {
    yield $i;
  }
}
