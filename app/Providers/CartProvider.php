<?php

namespace App\Providers;
use App\Cart;
use Illuminate\Support\ServiceProvider;

class CartProvider extends ServiceProvider
{

    public function register()
    {

    }

    public function boot()
    {
        $this->app->singleton(Cart::class, function() {
            if (!session()->has('cart')){
                session()->put('cart',new Cart());
            }
            return session()->get('cart');
        });
    }
}
