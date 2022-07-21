<?php

namespace App\View\Components\Template\Menu;

use Illuminate\View\Component;

class MenuLink extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $url;
    public $title;
    public $icon;
    public $active;

    public function __construct($url, $title, $icon)
    {
        $this->url = $url;
        $this->title = $title;
        $this->icon = $icon;
        $this->active = $this->checkActive();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */

    public function checkActive()
    {
        $state = true;
        $url = $this->url;
        $arr_url = explode('/', $url);
        foreach ($arr_url as $key => $value) {
            $segment = request()->segment($key + 1);
            if ($segment != $value) $state = false;
        }
        return $state;
    }
    public function render()
    {
        return view('components.template.menu.menu-link');
    }
}
