<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Dish::class, function (Faker $faker) {
    return [
        'dish' => $faker->sentence(),
        'price' => $faker->numberBetween(1,1000),
    ];
});
