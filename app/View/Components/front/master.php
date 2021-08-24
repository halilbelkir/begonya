<?php

namespace App\View\Components\front;

use Illuminate\View\Component;

class master extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $title;
    public $keywords;
    public $description;
    public $image;

    public function __construct($title = null, $keywords = null, $description = null, $image = null)
    {
        $this->image       = $image;
        $this->title       = $title;
        $this->description = $description;
        $this->keywords    = $keywords;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.master');
    }
}
