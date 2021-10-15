<?php

namespace App\Providers;

use App\Billing\BankPaymentGateway;
use App\Billing\CreditPaymentGateway;
use App\Billing\PaymentGatewayContract;
use App\Models\Channel;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Service Container (e.g. Payment Bank/Card)
        $this->app->singleton(PaymentGatewayContract::class,function ($app){

            if (request()->get('pay_method') === 'credit'){
                return new CreditPaymentGateway('usd');
            }
           return new BankPaymentGateway('usd');

        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //View Composer

        // option 1 - Every single view
//        View::share('channels',Channel::orderBy('name')->get());


        // option 2 - Granular views with Wildcards
//         'post.*' for all the views inside "ResourceView/post" directory
        View::composer(['post.*','channel.index'], function ($view){
            $view->with('channels',Channel::orderBy('name')->get());
        });


        //more advanced if there are too many view queries to implement
        // https://www.youtube.com/watch?v=7QWZxjgvEQc&ab_channel=Coder%27sTape

    }
}
