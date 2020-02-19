<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Orders_state_langTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $ord_state=1;
      DB::table('orders_state_lang')->insert([
          'id_order_state' => $ord_state,
          'id_lang' => 1,
          'name' => 'En reparto',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => $ord_state,
          'id_lang' => 2,
          'name' => 'Delivering',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => $ord_state,
          'id_lang' => 3,
          'name' => 'En repartiment',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
//
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 1),
          'id_lang' => 1,
          'name' => 'En preparación',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 1),
          'id_lang' => 2,
          'name' => 'In preparation',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 1),
          'id_lang' => 3,
          'name' => 'Preparant-se',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
//
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 2),
          'id_lang' => 1,
          'name' => 'Procesando',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 2),
          'id_lang' => 2,
          'name' => 'Processing',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 2),
          'id_lang' => 3,
          'name' => 'Processant',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
//
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 3),
          'id_lang' => 1,
          'name' => 'Procesando',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 3),
          'id_lang' => 2,
          'name' => 'Processing',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 3),
          'id_lang' => 3,
          'name' => 'Processant',
          'created_at' => now(),
          'updated_at' => now(),
      ]);

//
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 4),
          'id_lang' => 1,
          'name' => 'Procesando',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 4),
          'id_lang' => 2,
          'name' => 'Processing',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 4),
          'id_lang' => 3,
          'name' => 'Processant',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
//
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 5),
          'id_lang' => 1,
          'name' => 'Procesando',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 5),
          'id_lang' => 2,
          'name' => 'Processing',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 5),
          'id_lang' => 3,
          'name' => 'Processant',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 6),
          'id_lang' => 1,
          'name' => 'En reparto',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 6),
          'id_lang' => 2,
          'name' => 'Delivering',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 6),
          'id_lang' => 3,
          'name' => 'En repartiment',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      //
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 7),
          'id_lang' => 1,
          'name' => 'En preparación',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 7),
          'id_lang' => 2,
          'name' => 'In preparation',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 7),
          'id_lang' => 3,
          'name' => 'Preparant-se',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      //
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 8),
          'id_lang' => 1,
          'name' => 'Procesando',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 8),
          'id_lang' => 2,
          'name' => 'Processing',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 8),
          'id_lang' => 3,
          'name' => 'Processant',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      //
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 9),
          'id_lang' => 1,
          'name' => 'Procesando',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 9),
          'id_lang' => 2,
          'name' => 'Processing',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 9),
          'id_lang' => 3,
          'name' => 'Processant',
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      //
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 10),
          'id_lang' => 1,
          'name' => 'Procesando',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 10),
          'id_lang' => 2,
          'name' => 'Processing',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 10),
          'id_lang' => 3,
          'name' => 'Processant',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      //
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 11),
          'id_lang' => 1,
          'name' => 'Procesando',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 11),
          'id_lang' => 2,
          'name' => 'Processing',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 11),
          'id_lang' => 3,
          'name' => 'Processant',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
//
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 12),
          'id_lang' => 1,
          'name' => 'En preparación',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 12),
          'id_lang' => 2,
          'name' => 'In preparation',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 12),
          'id_lang' => 3,
          'name' => 'Preparant-se',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
//
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 13),
          'id_lang' => 1,
          'name' => 'Procesando',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 13),
          'id_lang' => 2,
          'name' => 'Processing',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 13),
          'id_lang' => 3,
          'name' => 'Processant',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
//
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 14),
          'id_lang' => 1,
          'name' => 'Procesando',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 14),
          'id_lang' => 2,
          'name' => 'Processing',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 14),
          'id_lang' => 3,
          'name' => 'Processant',
          'created_at' => now(),
          'updated_at' => now(),
      ]);

//
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 15),
          'id_lang' => 1,
          'name' => 'Procesando',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 15),
          'id_lang' => 2,
          'name' => 'Processing',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 15),
          'id_lang' => 3,
          'name' => 'Processant',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
//
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 16),
          'id_lang' => 1,
          'name' => 'Procesando',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 16),
          'id_lang' => 2,
          'name' => 'Processing',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 16),
          'id_lang' => 3,
          'name' => 'Processant',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 17),
          'id_lang' => 1,
          'name' => 'En reparto',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 17),
          'id_lang' => 2,
          'name' => 'Delivering',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 17),
          'id_lang' => 3,
          'name' => 'En repartiment',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      //
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 18),
          'id_lang' => 1,
          'name' => 'En preparación',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 18),
          'id_lang' => 2,
          'name' => 'In preparation',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 18),
          'id_lang' => 3,
          'name' => 'Preparant-se',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      //
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 19),
          'id_lang' => 1,
          'name' => 'Procesando',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 19),
          'id_lang' => 2,
          'name' => 'Processing',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('orders_state_lang')->insert([
          'id_order_state' => ($ord_state + 19),
          'id_lang' => 3,
          'name' => 'Processant',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
    }
}
