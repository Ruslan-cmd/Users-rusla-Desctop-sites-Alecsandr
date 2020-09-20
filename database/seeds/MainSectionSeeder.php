<?php

use Illuminate\Database\Seeder;
use App\Dish;
use App\MainSection;
class MainSectionSeeder extends Seeder
{

    public function run()
    {
      factory(\App\MenuSection::class, 4) ->create();

    }

}
