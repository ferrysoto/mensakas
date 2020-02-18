<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;
$factory->define(Address::class, function (Faker $faker) {
    return [
        'id_state' => random_int(1,50),
        'address' => $faker-> address,
        'city' => $faker-> city,
        'zipcode' => random_int(00000,99999),
        'active' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
