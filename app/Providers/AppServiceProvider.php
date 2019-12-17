<?php

namespace App\Providers;
use App\ProductType;
use App\Cart;
use Illuminate\Support\ServiceProvider;
use Session;

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
        //share data to view header
        view()->composer('master.header', function ($view) {
            $productTypes = ProductType::all();
            if(Session::get('cart')) {
                $cart = Session::get('cart');
                $view->with([
                    'prodTypes'=>$productTypes, 
                    'cartItems'=>$cart->items,
                    'totalQty'=>$cart->totalQty,
                    'totalPrice'=>$cart->totalPrice
                    ]);
            } else {
                $view->with(['prodTypes'=>$productTypes]);
            }
        });
    }
}
