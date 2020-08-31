<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Menu_Section::class, function (Faker $faker) {
    return [
        'section' => $faker->word(),
    ];
});
