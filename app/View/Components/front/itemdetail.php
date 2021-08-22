<?php

namespace App\View\Components\front;

use Illuminate\View\Component;

class itemdetail extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $title;

    public function __construct($title = null)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.item-detail');
    }
}
