<?php

namespace App\View\Components\dropdown;

use Illuminate\View\Component;

class item extends Component
{
    public $route;
    public $title;
    public $tooltip;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $title, $tooltip)
    {
        $this->route = $route;
        $this->title = $title;
        $this->tooltip = $tooltip;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dropdown.item');
    }
}
