<?php
use App\Cart;
if (!function_exists('cart')){
    function cart() {
   //     return app()->make(\App\Cart::class);
    return app(Cart::class);
    }
}
