<?php

use Faker\Generator as Faker;

$factory->define(\App\ObjectBorrowed::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 100),
        'friend_id' => $faker->numberBetween($min = 1, $max = 100),
        'object_id' => $faker->numberBetween($min = 1, $max = 100),
        'init_date' => now(),
        'end_date' => now()
    ];
});
