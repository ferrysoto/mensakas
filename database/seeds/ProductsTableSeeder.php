<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert([
          'id_supplier' => 1,
          'id_category_default' => 1,
          'id_tax_rules' =>   1,
          'active' =>   1,
          'show_price' =>   1,
          'minimal_quantity' =>   1,
          'price' =>   20.00,
          'additional_shipping_cost' =>   5.00,
          'gluten_contains' =>   0,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('products')->insert([
          'id_supplier' => 2,
          'id_category_default' => 1,
          'id_tax_rules' =>   1,
          'active' =>   1,
          'show_price' =>   1,
          'minimal_quantity' =>   1,
          'price' =>   30.00,
          'additional_shipping_cost' =>   5.00,
          'gluten_contains' =>   1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('products')->insert([
          'id_supplier' => 3,
          'id_category_default' => 1,
          'id_tax_rules' =>   1,
          'active' =>   1,
          'show_price' =>   1,
          'minimal_quantity' =>   1,
          'price' =>   20.00,
          'additional_shipping_cost' =>   5.00,
          'gluten_contains' =>   0,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('products')->insert([
          'id_supplier' => 4,
          'id_category_default' => 1,
          'id_tax_rules' =>   1,
          'active' =>   1,
          'show_price' =>   1,
          'minimal_quantity' =>   1,
          'price' =>   10.00,
          'additional_shipping_cost' =>   5.00,
          'gluten_contains' =>   1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('products')->insert([
          'id_supplier' => 5,
          'id_category_default' => 1,
          'id_tax_rules' =>   1,
          'active' =>   1,
          'show_price' =>   1,
          'minimal_quantity' =>   1,
          'price' =>   5.50,
          'additional_shipping_cost' =>   5.00,
          'gluten_contains' =>   0,
          'created_at' => now(),
          'updated_at' => now(),
      ]);
    }
}
