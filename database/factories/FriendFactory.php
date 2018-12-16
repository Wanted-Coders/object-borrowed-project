<?php

use Faker\Generator as Faker;

$factory->define(\App\Friend::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'nickname' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'cell_phone' => $faker->randomNumber($nbDigits = 9, $strict = false)
    ];
});
