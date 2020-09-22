<?php

use Illuminate\Database\Seeder;
use App\Dish;
use App\MenuSection;
use App\MainSection;


class DishesSeeder extends Seeder
{
    public function run()
    {
        $dishes = factory(\App\Dish::class, 30)->create();
        $this->assignSections($dishes);
        $this->assignMainSections($dishes);
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

    /**
     * @param Dish[]$dishes
     */
 private function assignMainSections($dishes){
     foreach ($dishes as $dish) {
         $mainsections = MainSection::inRandomOrder()->limit(1)->get();
         $dish->mainSection()->associate($mainsections)->save();
     }
 }
}
