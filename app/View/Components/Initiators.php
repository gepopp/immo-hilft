<?php

namespace App\View\Components;

use App\Models\Initiator;
use Illuminate\View\Component;

class Initiators extends Component
{

    public $initiators;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->initiators = Initiator::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.initiators');
    }
}
