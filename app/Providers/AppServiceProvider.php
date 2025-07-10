<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        Blade::if('admin', function () {
            return auth('admin')->check();
        });

        $appFullName = config('app.name');
        $appShortName = substr($appFullName, 0, strpos($appFullName, " "));
        View::share([
            'appName' => $appShortName,
            'appFullName' => $appFullName,
            'ogDescription' => $appFullName . ' – Guiding your financial growth with trusted expertise and tailored strategies to help you build and manage wealth with confidence.',
            'ogTitle' => 'A reliable investment partner providing diverse opportunities and dedicated support for every investor — from beginners to experienced professionals.',
            'metaDescription' => $appShortName . ' offers intelligent, accessible investment solutions designed to serve individuals at every stage, whether entering the market or optimizing an established portfolio.',
        ]);

        Schema::defaultStringLength(191);
    }
}
