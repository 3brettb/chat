<?php

namespace App\Http\ViewComposers\Room;

use Illuminate\View\View;
use App\Http\ViewComposers\ViewComposer;

class Show extends ViewComposer
{

    private $room;

    private $users;

    private $messages;

    /**
     * Create a new view composer.
     *
     * @return $this
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        $this->room = routeVar('room');
        $this->users = $this->room->users;
        $this->messages = $this->room->messages;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('users', $this->users)
             ->with('messages', $this->messages);
    }
}