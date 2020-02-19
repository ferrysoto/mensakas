<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Riders;
use App\User;
use Faker\Generator as Faker;

$factory->define(Riders::class, function (Faker $faker) {
    return [
        'id_user' => DB::table('users')->where('id_profile', 3)->inRandomOrder()->value('id_user'),
        'active' => 1,
        'max_travel' => random_int(50,5000),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
