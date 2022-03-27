<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Jackiedo\Cart\Facades\Cart;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $shoppingCart = Cart::name('shopping');
        View::share('card', $shoppingCart);
    }
}
