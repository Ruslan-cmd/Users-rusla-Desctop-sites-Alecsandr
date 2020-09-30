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
             // dd($this->getSectionAndDishTest()),
                'specialSections' => $this->getSectionAndDishTest()
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
            'sections' => $dish->menuSections()->pluck('section'),
            'menusection' => $dish->mainSection() ->pluck('name_of_main_section')
        ];
    }

*/


    private function getSectionAndDishTest()
    {

     return MainSection::query()
            ->inRandomOrder('name_of_main_section')
            ->with('dishes', 'dishes.menuSections')
            ->get();

    }




    /*
private function getSectionOfDish(){
     $dish =  $this->getSectionAndDishTest()['dish'];
    $dish->collect();
        return [
            'sections' =>$dish->menuSections()->pluck('section')
        ];
}
        */
}
