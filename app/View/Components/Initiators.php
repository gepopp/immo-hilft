<?php

namespace App\View\Components;

use App\Models\Initiator;
use Illuminate\View\Component;

class Initiators extends Component
{

    public $initiators;



    public $text;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->initiators = Initiator::all();

        $text = '';

        foreach ( $this->initiators as $key => $initiator ) {
            if($initiator->link){
                $text .= '<a href="' . $initiator->link . '">';
            }
            $text .= $initiator->name;
            if($initiator->link){
                $text .= '</a>';
            }
            if( $key < (count($this->initiators) - 1)){
                $text .= ', ';
            }
        }

        $this->text = $text;

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
