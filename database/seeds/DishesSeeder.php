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
    { //Для каждого блюда привязка к секциям
        //dishes - коллеция, полученная выше
        foreach ($dishes as $dish) {
            //Секции в рандомном порядке
            $sections = MenuSection::inRandomOrder()->limit(rand(2, 4))->get();
            //блюду СВЯЗАТЬ секции через переменную menuSections
            //belongs to many имеет метод sync
            $dish->menuSections()->sync($sections);
        }

    }
}
