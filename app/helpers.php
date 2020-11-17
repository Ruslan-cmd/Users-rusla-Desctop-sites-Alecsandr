<?php
use app\Cart;
if (!function_exists('cart')){
    /**
     * @return \App\Dish
     */
    function cart() {
        //return app()->make(\App\Cart::class);
    return app(Cart::class);
    }
}
