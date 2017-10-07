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
        DB::listen(function ($query) {
            
          dump($query->sql); // SQL
          dump($query->bindings); // parameters
          dump($query->time);

        //В этом примере из документации по версии 5.1 и ранее было:
        //DB::listen(function($sql, $bindings, $time) {
        //  //

        });
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
