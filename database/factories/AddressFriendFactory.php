<?php

use Faker\Generator as Faker;

$factory->define(\App\AddressFriend::class, function (Faker $faker) {
    return [
        'friend_id' => $faker->numberBetween($min = 1, $max = 100),
        'public_place' => $faker->address,
        'neighborhood' => $faker->streetName,
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
        'number' => $faker->buildingNumber,
        'complement' => $faker->country
    ];
});
