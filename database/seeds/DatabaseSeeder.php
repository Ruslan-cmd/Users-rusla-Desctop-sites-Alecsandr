<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
          $this->call(MainSectionSeeder::class);
          $this->call(EventsSeeder::class);
          $this->call(MenuSectionsSeeder::class);
          $this->call(DishesSeeder::class);
          $this->call(CommentSeeder::class);

    }
}

