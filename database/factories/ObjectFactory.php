<?php

use Faker\Generator as Faker;

$factory->define(\App\Object::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'user_id' => $faker->numberBetween($min = 1, $max = 100)
    ];
});
