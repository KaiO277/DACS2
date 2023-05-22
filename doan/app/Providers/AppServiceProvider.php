<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

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
        Paginator::useBootstrap();
        Validator::extend('date_difference', function($attribute, $value, $parameters, $validators){
            $firstDate = Carbon::parse($parameters[0]);
            $secondDate = Carbon::parse($parameters[1]);
            $minDifference = (int)$parameters[2];
            if($firstDate->diffInMonths($secondDate) < $minDifference)
            return false;
            return true;
        });
    }
}
