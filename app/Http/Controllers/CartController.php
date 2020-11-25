<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Dish;
use App\MenuSection;
use App\MainSection;

class CartController extends Controller
{
    public function index()
    {
        return view('layouts/cart', [
            'arrayOfCart' => $this->getFromCart()
        ]);
    }

    public function getFromCart()
    {


        return ['dishes' => cart()->getDishes()];

    }
}
