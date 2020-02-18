<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customers;
use Faker\Generator as Faker;

$factory->define(Customers::class, function (Faker $faker) {
    return [
        'id_lang' => random_int(1,3),
        'id_address' => random_int(1, 50),
        'first_name' => $faker->name,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'phone' => random_int(600000000,999999999),
    ];
});
