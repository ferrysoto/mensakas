<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Orders_state;
use Faker\Generator as Faker;

$factory->define(Orders_state::class, function (Faker $faker) {
    return [
        'invoice' => random_int(0,1),
        'send_email' => random_int(0,1),
        'active' => 1,
        'paid' => random_int(0,1),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
