<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\QueryException;
use App\Downloads;

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
        try{
            $downloads=Downloads::all()->count();
            \View::share(['downloadCount'=>$downloads]);
        }catch (QueryException $ex) {
            echo($ex->getMessage());
        }
       
    }
}
