<?php

namespace App\Providers;

use App\Http\ViewComposers\MenuComposer;
use App\Http\ViewComposers\NavigationComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        Validator::extend('recaptcha', 'App\\Validators\\ReCaptcha@validate');
        Schema::defaultStringLength(191);
        View::composer(['layouts.frontend.footer'], NavigationComposer::class);
        View::composer(['layouts.frontend.header'], MenuComposer::class);
    }
}
