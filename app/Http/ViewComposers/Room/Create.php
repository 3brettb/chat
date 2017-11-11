<?php

namespace App\Http\ViewComposers\Room;

use Illuminate\View\View;
use App\Http\ViewComposers\ViewComposer;

class Create extends ViewComposer
{

    /**
     * Create a new view composer.
     *
     * @return $this
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        //$view->with('count', $this->users->count());
    }

}