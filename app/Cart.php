<?php
namespace App;
class Cart
{
    private $dishes = [];

    public function getCount(){
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

        $this->dishes [] = $dish;
        session()->put('cart', $this);

    }
    public function isEmpty(){
        return $this->getCount() == 0;
    }
}
