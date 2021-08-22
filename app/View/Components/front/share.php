<?php

namespace App\View\Components\front;

use Illuminate\View\Component;

class share extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $subject;

    public function __construct($subject = 'Begonya Psikoloji & Aile Danışmanlığı')
    {
        $this->subject = $subject;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.share');
    }
}
