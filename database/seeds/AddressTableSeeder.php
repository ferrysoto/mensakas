<?php
use App\Address;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('address')->insert([
        'id_state' => random_int(1,50),
        'address' => 'nullAddress',
        'city' => 'nullCity',
        'zipcode' => 00000,
        'active' => 1,
        'created_at' => now(),
        'updated_at' => now(),
      ]);
      factory(Address::class,50)->create();

    }
}
