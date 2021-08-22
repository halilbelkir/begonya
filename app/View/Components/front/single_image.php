<?php

namespace App\View\Components\front;

use Illuminate\View\Component;

class single_image extends Component
{
    public $image;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image = 'front/images/image-not.jpg')
    {
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.single-image');
    }
}
