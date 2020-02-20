<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Products_categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products_categories')->insert([
          'id_parent' => null,
          'active' =>   1,
          
          'is_root_category' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('products_categories')->insert([
          'id_parent' => 1,
          'active' =>   1,
          
          'is_root_category' => 0,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('products_categories')->insert([
          'id_parent' => null,
          'active' =>   1,
          
          'is_root_category' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

    }
}
