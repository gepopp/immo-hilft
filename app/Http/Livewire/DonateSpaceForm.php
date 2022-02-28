<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\subscriber;
use App\Models\SpaceRegistration;
use Illuminate\Support\Facades\Http;
use App\Notifications\VerifySpaceDonation;



class DonateSpaceForm extends Component {





    public $name;





    public $email;





    public $company;





    public $phone;





    public $address;





    public $zip;





    public $city;





    public $country;





    public $square_meter;





    public $rooms;





    public $available_from;





    public $available_to;





    public $description;





    public $agb;





    public $newsletter;





    protected $rules = [

        'name'           => 'string|required|max:255',
        'email'          => 'email|required',
        'company'        => 'string|required|max:255',
        'phone'          => 'string|required|max:255',
        'address'        => 'string|required|max:255',
        'zip'            => 'string|required|max:255',
        'city'           => 'string|required|max:255',
        'country'        => 'string|required|max:255',
        'square_meter'   => 'integer|required',
        'rooms'          => 'required|integer',
        'available_from' => 'date|required|after:today',
        'available_to'   => 'date|nullable|after:today',
        'description'    => 'string|required|min:30',
        'newsletter'     => 'nullable',
        'agb'            => 'accepted',

    ];





    protected function validationAttributes() {

        return [
            'name'           => __( 'Name' ),
            'email'          => __( 'Email' ),
            'company'        => __( 'Company' ),
            'phone'          => __( 'Phone' ),
            'address'        => __( 'Address of the living space' ),
            'zip'            => __( 'Zip' ),
            'city'           => __( 'City' ),
            'country'        => __( 'State' ),
            'square_meter'   => __( 'Square meter' ),
            'rooms'          => __( 'Rooms' ),
            'available_from' => __( 'Available from' ),
            'available_to'   => __( 'Available to' ),
            'description'    => __( 'Description' ),
            'agb'            => __( 'Datenschutzerklärung' ),
        ];
    }





    public function submit( $token ) {


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

        $donation = new SpaceRegistration( [
            'name'           => $this->name,
            'email'          => $this->email,
            'company'        => $this->company,
            'phone'          => $this->phone,
            'address'        => $this->address,
            'zip'            => $this->zip,
            'city'           => $this->city,
            'country'        => $this->country,
            'square_meter'   => $this->square_meter,
            'rooms'          => $this->rooms,
            'available_from' => Carbon::parse( $this->available_from )->toDateTimeString(),
            'available_to'   => $this->available_to != null ? Carbon::parse( $this->available_to )->toDateTimeString() : null,
            'description'    => $this->description,
        ] );


        if ( $this->newsletter ) {
            subscriber::firstOrCreate( [ 'email' => $this->email ], [ 'name' => $this->name ] );
        }

        $donation->save();

        $this->reset();


        $donation->notify( new VerifySpaceDonation() );


        $this->dispatchBrowserEvent( 'saved' );


    }





    public function updated( $propertyName ) {

        $this->validateOnly( $propertyName );
    }





    public function render() {

        return view( 'livewire.donate-space-form' );
    }
}
