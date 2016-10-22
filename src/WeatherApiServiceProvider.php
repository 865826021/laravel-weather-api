<?php

namespace Falstack\Weather;

use Illuminate\Support\ServiceProvider;

class WeatherApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('weatherApi', function () {
            return new WeatherApi();
        });
    }
}
