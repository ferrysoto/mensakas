<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //spain provinces seed
      DB::table('state')->insert([
          'name' => 'Barcelona',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'A Coruna',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Alava',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Albacete',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Alicante',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Almeria',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Asturias',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Avila',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Badajoz',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Baleares',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Burgos',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Caceres',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Cadiz',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Cantabria',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Castellon',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Ciudad Real',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Cordoba',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Cuenca',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Girona',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Granada',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Guadalajara',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Gipuzkoa',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Huelva',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Jaen',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Huesca',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'La Rioja',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Las Palmas',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Leon',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Lleida',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Lugo',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Madrid',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Malaga',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Murcia',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Navarra',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Ourense',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Palencia',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Pontevedra',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Salamanca',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Segovia',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Sevilla',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Soria',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Tarragona',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Santa Cruz De Tenerife',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Teruel',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Toledo',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Valencia',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Valladolid',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Vizcaya',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Zamora',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);

      DB::table('state')->insert([
          'name' => 'Zaragoza',
          'active' => 1,
          'created_at' => now(),
          'updated_at' => now(),
      ]);


    }
}
