<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('room.index', 'App\Http\ViewComposers\Room\Index');
        View::composer('room.create', 'App\Http\ViewComposers\Room\Create');
        View::composer('room.show', 'App\Http\ViewComposers\Room\Show');
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
