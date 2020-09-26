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
            'specialsection' => $this->getSectionAndDish(),
        ]);
    }
    private function getSectionAndDish()
    {

        $dish = Dish::query()
            ->inRandomOrder('dish')
            //Запрос должен включать в себя закрузку секций этого блюда
            ->with('mainSection')
            ->first();

        return [
            'dish' => $dish->dish,
            'price' => $dish->price,
            // pluck - берет 1 поле коллекции и по нему выводит информацию
            // коллецию моделей превращает в коллецию строк которые сформированы из атрибута section
            'sections' => $dish->menuSections()->pluck('section'),
        ];
    }
}
