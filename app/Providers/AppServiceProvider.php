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
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->register_helpers();
    }

    /**
     * Register any helper function files
     *
     * @return void
     */
    private function register_helpers()
    {
        require_once  app_path() . '/Resources/Helpers/General.php';
    }
}
