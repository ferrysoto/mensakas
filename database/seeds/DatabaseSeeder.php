<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
  * Seed the application's database.
  *
  * @return void
  */
  public function run()
  {
    $this->call([
      StateTableSeeder::class,
      ProfilesTableSeeder::class,
      LanguagesTableSeeder::class,
      //Address
      AddressTableSeeder::class,

      //users
      UserTableSeeder::class,

      //customers
      CustomersTableSeeder::class,

    ]);
  }
}
