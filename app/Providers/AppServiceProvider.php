<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Admin LTE
        $this->publishes([__DIR__.'/../../vendor/almasaeed2010/adminlte/dist/css' => public_path('adminlte\css')], 'public');
        $this->publishes([__DIR__.'/../../vendor/almasaeed2010/adminlte/dist/img' => public_path('adminlte\img')], 'public');
        $this->publishes([__DIR__.'/../../vendor/almasaeed2010/adminlte/dist/js' => public_path('adminlte\js')], 'public');
        $this->publishes([__DIR__.'/../../vendor/almasaeed2010/adminlte/plugins' => public_path('adminlte\plugins')], 'public');

        //Bootstrap
        $this->publishes([__DIR__.'/../../vendor/twbs/Bootstrap/dist/js' => public_path('bootstrap\js')], 'public');
        $this->publishes([__DIR__.'/../../vendor/twbs/Bootstrap/dist/fonts' => public_path('bootstrap\fonts')], 'public');
        $this->publishes([__DIR__.'/../../vendor/twbs/Bootstrap/dist/css' => public_path('bootstrap\css')], 'public');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
