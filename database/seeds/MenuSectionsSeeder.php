<?php

use Illuminate\Database\Seeder;

class MenuSectionsSeeder extends Seeder
{
    public function run()
    {
        factory(\App\MenuSection::class, 15) ->create();
    }
}
