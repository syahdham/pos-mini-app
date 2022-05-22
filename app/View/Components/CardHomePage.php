<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardHomePage extends Component
{
    public $product, $key;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($product, $key)
    {
        $this->key = $key;
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-home-page');
    }
}
