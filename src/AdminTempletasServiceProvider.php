<?php

namespace Ozparr\AdminTempleta;

use Illuminate\Support\ServiceProvider;

class AdminTempletasServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/assets' => public_path('assets'),
        ], 'public');

        $this->loadViewsFrom(__DIR__.'/views', 'admin_templeta');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
