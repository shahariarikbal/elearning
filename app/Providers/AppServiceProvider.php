<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Models\Setting;
use Inertia\Inertia;

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

        // Inertia::share('*', function($view){
        //     // $view->with('setting',Setting::first());
        // });
        Inertia::share([
            'setting' => function () {
                return [
                    'allSetting' => Setting::first(),
                ];
            }
        ]);
    }
}
