<?php

use Illuminate\Database\Seeder;
use App\Dish;
use App\MenuSection;


class DishesSeeder extends Seeder
{
    public function run()
    {
        $dishes = factory(\App\Dish::class, 30)->create();
        $this->assignSections($dishes);
    }

    /**
     * @param Dish[]$dishes
     */
    private function assignSections($dishes)
    {
        foreach ($dishes as $dish) {
            $sections = MenuSection::inRandomOrder()->limit(rand(2, 4))->get();
            $dish->menuSections()->sync($sections);
        }

    }
}
