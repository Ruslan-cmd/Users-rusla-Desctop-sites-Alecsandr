<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dish;
use App\MenuSection;
use App\MainSection;

class ShopController extends Controller
{
    public function index()
    {

        return view('layouts/shop_main', [
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

}
