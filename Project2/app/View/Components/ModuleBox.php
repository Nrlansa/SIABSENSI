<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ModuleBox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $subtitle;
    public $color;

    public function __construct($title,$subtitle, $color )
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this-> color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.module-box');
    }
}
