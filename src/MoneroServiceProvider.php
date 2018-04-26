<?php

namespace evan45245\monerophp-laravel;

use evan45245\monerophp-laravel\jsonRPCClient.php 
use evan45245\monerophp-laravel\daemonRPC.php as Monero;
use Illuminate\Support\ServiceProvider;

class MoneroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/monero-api.php' => config_path('monero-api.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('monero', function () {
            return new Monero();
        });
    }
}
