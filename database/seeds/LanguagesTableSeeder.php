<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('language')->insert([
          'name' => 'spanish',
          'active' => 1,
          'iso_code' => 'ES',
          'default' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('language')->insert([
          'name' => 'english',
          'active' => 1,
          'iso_code' => 'EN',
          'default' => 0,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('language')->insert([
          'name' => 'catalan',
          'active' => 1,
          'iso_code' => 'CA',
          'default' => 0,
          'created_at' => now(),
          'updated_at' => now(),
      ]);
    }
}
