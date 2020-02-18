<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('suppliers')->insert([
          'name' => 'China Town',
          'id_category_supplier' => 2,
          'email' => 'chinatown@gmail.com',
          'id_address' => random_int(1,50),
          'phone' => random_int(600000000,999999999),
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('suppliers')->insert([
          'name' => 'Istambul Kebab',
          'id_category_supplier' => 3,
          'email' => 'istambulkebab@gmail.com',
          'id_address' => random_int(1,50),
          'phone' => random_int(600000000,999999999),
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('suppliers')->insert([
          'name' => 'KFC',
          'id_category_supplier' => 1,
          'email' => 'kfc@gmail.com',
          'id_address' => random_int(1,50),
          'phone' => random_int(600000000,999999999),
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('suppliers')->insert([
          'name' => 'Tagliatella',
          'id_category_supplier' => 1,
          'email' => 'tagliatela@gmail.com',
          'id_address' => random_int(1,50),
          'phone' => random_int(600000000,999999999),
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('suppliers')->insert([
          'name' => 'Ramen-ya',
          'id_category_supplier' => 2,
          'email' => 'ramen@gmail.com',
          'id_address' => random_int(1,50),
          'phone' => random_int(600000000,999999999),
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);
    }
}
