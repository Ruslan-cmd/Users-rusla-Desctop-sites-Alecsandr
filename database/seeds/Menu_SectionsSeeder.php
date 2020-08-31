<?php

use Illuminate\Database\Seeder;

class Menu_SectionsSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Menu_Section::class, 15) ->create();
    }
}
