<?php

namespace App\Providers;

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
    }
    public function add(Dish $dish){
        $this->dishes [] = $dish;
    }
    public function isEmpty(){
        return $this->getCount() == 0;
    }
}
