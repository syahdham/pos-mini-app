<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageIndex extends Component
{
    public $label, $route, $dataTable;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $route, $dataTable)
    {
        $this->label = $label;
        $this->route = $route;
        $this->dataTable = $dataTable;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page-index');
    }
}
