<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(\App\Event::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'date' => $faker->date('Y-m-d', \Carbon\Carbon::now()->addMonths(4)->format('Y-m-d')),
        'time_start' => $faker->time(),
        'time_end' => $faker->time(),
        'description' => implode("\n", $faker->sentences(10)),
        'organizer' => $faker->name,
        'price' => $faker->numberBetween(0,1000),
        'phone' => $faker->phoneNumber,
        'email' => $faker->email,
    ];
});
