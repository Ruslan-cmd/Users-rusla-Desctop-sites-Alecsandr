<?php

use Illuminate\Database\Seeder;
use App\Dish;
use App\MainSection;
class MainSectionSeeder extends Seeder
{

    public function run()
    {
        $mainsections = factory(\App\MenuSection::class, 4) ->create();
        $this->assignDishes($mainsections);
    }

    /**
     * @param MainSection[] $mainsections
     */
    private function assignDishes($mainsections)
    {
        foreach ($mainsections as $mainsection) {
            $sections = Dish::inRandomOrder()->limit(rand(2, 4))->get();
            $mainsection->mainSection()->sync($sections);
        }

    }
}
