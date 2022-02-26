<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Notifications\VerifyNewsletter;



class SubscriberForm extends Component {





    public $name;





    public $email;





    public $agb;





    protected $rules = [
        'name'  => 'nullable|string',
        'email' => 'email|required|unique:subscribers,email',
        'agb'   => 'accepted',
    ];






    public function submit() {

        $data = $this->validate();

        $subscriber = \App\Models\subscriber::create( $data );

        $subscriber->notify( new VerifyNewsletter() );

        $this->reset( 'name', 'email', 'agb' );

        $this->dispatchBrowserEvent( 'saved' );

    }





    public function render() {

        return view( 'livewire.subscriber-form' );
    }
}
