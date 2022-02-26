<?php

namespace App\Http\Livewire;

use Livewire\Component;



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

    ];





    public function render() {

        return view( 'livewire.donate-space-form' );
    }
}
