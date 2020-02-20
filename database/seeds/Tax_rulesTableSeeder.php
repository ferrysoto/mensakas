<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Tax_rulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tax_rules')->insert([
          'rate' => 21,
          'active' => 1,
          'name' => 'IVA',
          'created_at' => now(),
          'updated_at' => now(),
      ]);
    }
}
