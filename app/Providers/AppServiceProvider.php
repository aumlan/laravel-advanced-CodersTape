<?php

namespace App\Providers;

use App\Billing\BankPaymentGateway;
use App\Billing\CreditPaymentGateway;
use App\Billing\PaymentGatewayContract;
use App\Macros\ResponseMixins;
use App\Macros\StrMixins;
use App\Models\Channel;
use App\Postcard\PostcardSendingService;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;


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

        // Facades Implementation

        //Normal version
//        $this->app->singleton(PostcardSendingService::class,function ($app){
//            return new PostcardSendingService('usa',4,6);
//        });

        //Facade version
        // 'postcard' in abstract is an allias
        $this->app->singleton('Postcard',function ($app){
            return new PostcardSendingService('usa',4,6);
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


        // Macros Start

        /**
         * Register the Custom Macro Classes
         * Str/ResponseFactory::mixin() will add a custom function List in Str/ResponseFactory
         * StrMixins or ResponseMixins class contains the list of custom functions to add in that corresponding Str/ResponseFactory class.
         */

        Str::mixin(new StrMixins());
        ResponseFactory::mixin(new ResponseMixins());

        // Macros End

    }
}
