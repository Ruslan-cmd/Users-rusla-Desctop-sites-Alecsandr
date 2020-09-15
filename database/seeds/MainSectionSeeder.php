<?php

use Illuminate\Database\Seeder;

class MainSectionSeeder extends Seeder
{

    public function run()
    {
        factory(\App\MenuSection::class, 4) ->create();
    }

    /**
     * @param MainSection[] $main_sections
     */
    private function assignDishes($mainsections)
    {
        foreach ($mainsections as $mainsection) {
            $sections = Dish::inRandomOrder()->limit(rand(2, 4))->get();
            $mainsection->mainSection()->sync($sections);
        }

    }
}
