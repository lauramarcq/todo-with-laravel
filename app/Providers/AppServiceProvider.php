<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);
        try {
            \DB::connection()->getPDO();
            dump('Database connected: ' . \DB::connection()->getDatabaseName());
        }
         
        catch (\Exception $e) {
            dump('Database connected: ' . 'None');
        }
    }
}
