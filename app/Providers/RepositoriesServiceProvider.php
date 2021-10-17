<?php

namespace App\Providers;

use App\Repositories\CustomerInterface;
use App\Repositories\CustomerRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Service Container (e.g. Payment Bank/Card)
        $this->app->bind(CustomerInterface::class,CustomerRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
