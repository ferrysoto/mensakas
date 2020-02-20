<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Profiles_langTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('profiles_lang')->insert([
        'id_profile' =>   1,
        'id_lang' =>   1,
        'name_profile' =>   'admin',
        'decription_profile' =>   'administrator',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('profiles_lang')->insert([
        'id_profile' =>   2,
        'id_lang' =>   1,
        'name_profile' =>   'desarrollador',
        'decription_profile' =>  'desarrolador web' ,
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('profiles_lang')->insert([
        'id_profile' =>   3,
        'id_lang' =>   1,
        'name_profile' =>   'repartidor',
        'decription_profile' =>   'repartidor de ordenes',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('profiles_lang')->insert([
        'id_profile' =>   4,
        'id_lang' =>   1,
        'name_profile' =>   'contable',
        'decription_profile' =>   'contable',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
      DB::table('profiles_lang')->insert([
        'id_profile' =>   5,
        'id_lang' =>   1,
        'name_profile' =>   'atencion al cliente',
        'decription_profile' =>   'atencion de llamadas de clientes',
          'created_at' => now(),
          'updated_at' => now(),
      ]);

    }
}
