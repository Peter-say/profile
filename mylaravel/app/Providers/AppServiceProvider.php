<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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

        // view()->composer('*',function($view){
        //     $view->with([
        //         'admin_assets' => url('/').env('RESOURCE_URL').'/ashboard',
        //         'web_source' => url('/').env('RESOURCE_URL').'/web_2',

        //     ]);
        // });
      
    }
}
