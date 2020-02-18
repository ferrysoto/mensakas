<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $profiles = array('admin', 'developer', 'rider', 'accountant', 'client_atention');
      DB::table('profiles')->insert([
          'name' => $profiles[0],
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('profiles')->insert([
          'name' => $profiles[1],
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('profiles')->insert([
          'name' => $profiles[2],
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('profiles')->insert([
          'name' => $profiles[3],
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('profiles')->insert([
          'name' => $profiles[4],
          'created_at' => now(),
          'updated_at' => now(),
      ]);

    }
}
