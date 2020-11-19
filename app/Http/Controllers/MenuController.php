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
        return view('layouts/menu_page', [
            'specialSections' => $this->getSectionAndDishTest()
        ]);
    }
    private function getSectionAndDishTest()
    {
        return MainSection::query()
            ->inRandomOrder('name_of_main_section')
            ->with('dishes', 'dishes.menuSections')
            ->get();
    }
    public function addToCart(Dish $dish)
    {
        cart()->add($dish);
        // dd(session('cart'));в сессии блюдо ЕСТЬ
        $count = cart()->getCount();
        return redirect()->back()->with('status',"В корзине {$count} блюд"); //Помещает переменную status с определенным значением в сессию
           }
}
