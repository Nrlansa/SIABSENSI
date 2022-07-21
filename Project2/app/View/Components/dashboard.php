<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Dashboard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $menu;
    public function __construct($menu)
    {
        $this->menu = $menu;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard');
    }
}
