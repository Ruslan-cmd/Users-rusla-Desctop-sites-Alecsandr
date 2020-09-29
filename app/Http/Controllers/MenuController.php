<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Dish;
use App\MenuSection;
use App\MainSection;

class MenuController extends Controller
{
    public function index()
    {

            return view('layouts/menu', [
dd($this->getSectionAndDish()),
  //              'specialSection' => $this->getSectionAndDish()
        ]);
        }

   /* private function getSectionAndDish()
    {

        $dish = Dish::query()
            ->inRandomOrder('dish')
            ->with('menuSections')
            ->with('mainSection')
            ->first();


        return [
            'dish' => $dish->dish,
            'price' => $dish->price,
            // pluck - берет 1 поле коллекции и по нему выводит информацию
            // коллецию моделей превращает в коллецию строк которые сформированы из атрибута section
            'sections' => $dish->menuSections()->pluck('section'),
            'menusection' => $dish->mainSection() ->pluck('name_of_main_section')
        ];
    }
*/
    private function getSectionAndDish(){

        $section = MainSection::query()
            ->with('dishes')
            ->first();
        $dish = Dish::query()
            ->with('menuSections')
            ->first();

        return [
            'mainsection' => $section->name_of_main_section,
            // pluck - берет 1 поле коллекции и по нему выводит информацию
            // коллецию моделей превращает в коллецию строк которые сформированы из атрибута section
            'dish' => $section->dishes()->pluck('dish'),
            'price' =>$section->dishes()->pluck('price'),
            'sections' => $dish->menuSections()->pluck('section'),
        ];
    }

}
