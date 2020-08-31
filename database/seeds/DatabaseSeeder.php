<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
          $this->call(EventsSeeder::class);
          $this->call(Menu_SectionsSeeder::class);
          $this->call(DishesSeeder::class);
    }
}

