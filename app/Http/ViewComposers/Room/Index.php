<?php

namespace App\Http\ViewComposers\Room;

use Illuminate\View\View;
use App\Room;
use App\Http\ViewComposers\ViewComposer;

class Index extends ViewComposer
{
    private $rooms;

    /**
     * Create a new view composer.
     *
     * @return $this
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        $this->rooms = Room::all();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('rooms', $this->rooms);
    }
}