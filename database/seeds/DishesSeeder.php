<?php

use Illuminate\Database\Seeder;

class DishesSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Dish::class, 30) ->create();
    }
}
