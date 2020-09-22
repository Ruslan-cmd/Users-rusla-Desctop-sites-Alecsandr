<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\MainSection::class, function (Faker $faker) {
    return [
     'name_of_main_section' =>$faker->sentence(10)
    ];
});
