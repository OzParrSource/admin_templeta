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
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->publishes([
            __DIR__.'/assets' => public_path('assets'),
        ], 'public');
        $this->publishes([
            __DIR__.'/views/templetas/admin/partials/menu' => base_path('resources/views/admin/ozPartials')
        ], 'views');

        $this->loadViewsFrom(__DIR__.'/views', 'admin_templeta');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Ozparr\AdminTempleta\Controllers\HomeController');
    }
}
