<?php
namespace App;
class Cart
{
    private $dishes = [];

    public function getCount(){
        //dd($this->dishes,session('cart'));
       // dd(count($this->dishes));
        return count($this->dishes);

    }
    public function getDishes(){

        return $this->dishes;
    }
    public function clear(){
        $this->dishes = [];
        session()->put('cart', $this);
    }
    public function add(Dish $dish){

        $this->dishes[] = $dish;
        session()->put('cart', $this);



       // dd(count($this->dishes)); Колличество корректно
        //return count($this->dishes);
      //dd(session('cart')); // сессия не пуста, корзина есть!
//dd($this->dishes); // массив не пуст элемнты добавляются в массив
    }


    public function isEmpty(){
        return $this->getCount() == 0;
    }
}
