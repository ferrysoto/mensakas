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
      //Profiles
      ProfilesTableSeeder::class,
      LanguagesTableSeeder::class,
      Tax_rulesTableSeeder::class,
      //Address
      AddressTableSeeder::class,
      //users
      UserTableSeeder::class,
      //customers
      CustomersTableSeeder::class,
      //Riders
      RidersTableSeeder::class,
      //Suppliers
        //suppliers_categories
        Suppliers_categoriesTableSeeder::class,

    //suppliers_categories_lang
    //PENDIENTE
    //Profiles_lang
    //PENDIENTE

        //supliers
        SuppliersTableSeeder::class,
      //Products
      Products_categoriesTableSeeder::class,

      ProductsTableSeeder::class,

      //Products_lang

      //orders
      Orders_stateTableSeeder::class,

        Orders_state_langTableSeeder::class,

        OrdersTableSeeder::class,

      //Invoices
      InvoicesTableSeeder::class,

      //messages
      MessagesTableSeeder::class,

      Orders_riderTableSeeder::class,
      Orders_historyTableSeeder::class,
      Orders_detailsTableSeeder::class,

      Profiles_langTableSeeder::class,


    ]);
  }
}
