<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
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
        /* mysql walin direct table hadaddi api varchar(15) kiyala table column walata size 1k denawa.
            namuth mehidi, database\migrations file ekakin table column create krddi api size 1k denne ne.
            e nisa thama app\providers\AppServiceProvider.php file eke boot function eka athule me widiyata size 1k denne.
        */
        Schema::defaultStringLength(191); // me schema class eka udinma insert krganna one "use Illuminate\Support\ServiceProvider;" lesa.
    }
}
