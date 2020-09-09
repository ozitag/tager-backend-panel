<?php

namespace OZiTAG\Tager\Backend\Panel;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;

class PanelServiceProvider extends RouteServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        $this->loadRoutesFrom(__DIR__ . '/../routes/routes.php');
    }
}
