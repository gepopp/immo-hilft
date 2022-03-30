<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\SpaceRegistration;
use Illuminate\Support\Facades\Http;



class SpaceUpdate extends Component {





    public $space_registration;





    public $for_delete = false;





    public $address;





    public $zip;





    public $city;





    public $available_from;





    public $available_to;


    public $agb;



    public function mount( SpaceRegistration $space ) {

        $this->space_registration = $space;
        $this->address            = $space->address;
        $this->zip                = $space->zip;
        $this->city               = $space->city;
        $this->available_from     = $space->available_from;
        $this->available_to       = $space->available_to;

    }


    protected $rules = [
        'address'        => 'string|required|max:255',
        'zip'            => 'string|required|max:255',
        'city'           => 'string|required|max:255',
        'available_from' => 'date',
        'available_to'   => 'date',
        'agb'            => 'accepted',

    ];


    public function submit($token){

        $captcha = Http::asForm()->post( 'https://www.google.com/recaptcha/api/siteverify', [
            'secret'   => env( 'GOOGLE_RECAPTCHA_SECRET' ),
            'response' => $token,
        ] );

        $valid = $captcha->collect()->toArray();

        if(! $valid['success']){
            $this->dispatchBrowserEvent( 'spamprotect' );
            return;
        }


        $this->validate();


        $this->space_registration->update([
            'address'        => $this->address,
            'zip'            => $this->zip,
            'city'           => $this->city,
            'available_from' => Carbon::parse( $this->available_from )->toDateTimeString(),
            'available_to'   => $this->available_to != null ? Carbon::parse( $this->available_to )->toDateTimeString() : null,
        ]);


        $this->dispatchBrowserEvent('saved');
    }


    public function delete(){
        $this->space_registration->delete();
        $this->dispatchBrowserEvent('saved');
        $this->reset();
    }


    public function render() {

        return view( 'livewire.space-update' );
    }
}
