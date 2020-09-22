<?php

use Illuminate\Database\Seeder;
use App\Dish;
use App\MainSection;
class MainSectionSeeder extends Seeder
{

    public function run()
    {
      factory(\App\MainSection::class, 5) ->create();

    }

}
