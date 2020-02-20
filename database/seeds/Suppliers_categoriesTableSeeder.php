<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Suppliers_categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('suppliers_categories')->insert([
          'id_parent' => 1,
          'active' => 1,
          'position' =>  random_int(-999999,999999),
          'is_root_category' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('suppliers_categories')->insert([
          'id_parent' => 1,
          'active' => 1,
          'position' =>  random_int(-999999,999999),
          'is_root_category' => 0,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('suppliers_categories')->insert([
          'id_parent' => 2,
          'active' => 1,
          'position' =>  random_int(-999999,999999),
          'is_root_category' => 0,
          'created_at' => now(),
          'updated_at' => now(),
      ]);
    }
}
