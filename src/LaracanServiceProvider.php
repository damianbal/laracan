<?php

namespace damianbal\Laracan;

use Illuminate\Support\ServiceProvider;

class LaracanServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       $this->loadRoutesFrom(__DIR__."/../routes/routes.php");
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
