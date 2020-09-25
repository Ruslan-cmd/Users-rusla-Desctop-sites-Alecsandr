<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\MainSection;
$factory->define(\App\Dish::class, function (Faker $faker) {
    $mainsections = MainSection::inRandomOrder()->first();
    return [
        'dish' => $faker->sentence(3),
        'price' => $faker->numberBetween(1,1000),
        'main_section_id' => $mainsections,
    ];
});
