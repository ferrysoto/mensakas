<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class Suppliers_categories_langTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('suppliers_categories_lang')->insert([
        'id_category' => 1,
        'name' => "Pizzeria",
        'id_lang' => 1,
      ]);
      DB::table('suppliers_categories_lang')->insert([
        'id_category' => 2,
        'name' => "Sushi",
        'id_lang' => 1,
      ]);
      DB::table('suppliers_categories_lang')->insert([
        'id_category' => 3,
        'name' => "Kebab",
        'id_lang' => 1,
      ]);
    }
}
