<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*',function($view){

            $setting = DB::table('general_settings')->find(1);
            $visas = DB::table('visas')->get();
            $view->with(compact('setting', 'visas'));
           
        });
        Schema::defaultStringLength(191);
    }
}
