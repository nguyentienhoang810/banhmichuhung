<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Billing\PaymentGatewayContract;
use App\Billing\BankPaymentGateway;
use App\Billing\CreditPaymentGateway;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind(PaymentGateway::class, function($app) {
        //     return new PaymentGateway('jpy');
        // });
        $this->app->singleton(PaymentGatewayContract::class, function($app) {
            if (request()->has('credit')) {
                return new CreditPaymentGateway('jpy');
            }
            return new BankPaymentGateway('jpy');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
