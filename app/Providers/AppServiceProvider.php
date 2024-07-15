<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\WeatherServices;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton(WeatherServices::class, function ($app) {
            return new WeatherServices();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
