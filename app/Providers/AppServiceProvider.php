<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Lga;
use App\Models\Polling_Unit;
use App\Models\Party;

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
        view()->composer(['layouts.app', 'Home.index', 'Home.lga_results', 'Home.pu_results', 'Home.record_pu_results'], function ($view) {
            $lgas = Lga::all();

            $polling_units = Polling_Unit::all();

            $party = Party::all();
           

            $view->with(compact([
                'lgas','polling_units','party'
            ]));
        });
    }
}
