<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(\App\Comment::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'profession' => $faker->word(),
        'comment' => implode ("\n", $faker->sentences(4)),
        'rating' =>$faker->numberBetween(1,5),
    ];
});
