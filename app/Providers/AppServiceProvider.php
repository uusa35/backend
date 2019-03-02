<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Laracasts\Generators\GeneratorsServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('local')) {
//            $this->app->register(DuskServiceProvider::class);
            $this->app->register(GeneratorsServiceProvider::class);
        }
    }
}
