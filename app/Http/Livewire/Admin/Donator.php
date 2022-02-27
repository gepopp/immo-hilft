<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;



class Donator extends Component {





    public $name;





    public $link;





    public $donation;





    public $donators;





    protected $rules = [
        'name'     => 'string|required',
        'link'     => 'url|nullable',
        'donation' => 'integer|nullable',
    ];





    public function mount() {

        $this->donators = \App\Models\Donator::all()->toArray();

    }





    public function submit() {


        \App\Models\Donator::create( $this->validate() );

        $this->reset( 'name', 'link', 'donation' );

        $this->donators = \App\Models\Donator::all()->toArray();

    }





    public function delete( \App\Models\Donator $donator) {

        $donator->delete();
        $this->donators = \App\Models\Donator::all()->toArray();

    }





    public function render() {

        return view( 'livewire.admin.donator' );
    }
}
