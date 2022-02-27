<?php

namespace App\View\Components;

use App\Models\Donator;
use Illuminate\View\Component;

class Donators extends Component
{



    public $donators;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->donators = Donator::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.donators');
    }
}
