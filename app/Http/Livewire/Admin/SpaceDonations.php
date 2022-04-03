<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\SpaceRegistration;
use App\Notifications\SpaceRegistrationUpdateNotification;



class SpaceDonations extends Component {





    public $spaces;





    public $deleted;





    public $file;





    public $sqm;





    public function mount() {

        $this->spaces = SpaceRegistration::all();
        $this->deleted = SpaceRegistration::onlyTrashed()->get();


    }





    public function export() {

        $filename = 'spaces.csv';

// open csv file for writing
        $f = fopen( storage_path( 'app/public/' . $filename ), 'w' );

        if ( $f === false ) {
            die( 'Error opening the file ' . $filename );
        }

        $headers = [
          'id',
          'name',
          'email',
          'company',
          'phone',
          'address',
          'zip',
          'city',
          'country',
          'sqm',
          'rooms',
          'exklusiv',
          'freerent',
          'furnitured',
          'available_from',
          'available_to',
          'descritpion',
          'deleted_at',
          'created_at',
          'updated_at'
        ];

// write each row at a time to a file
        foreach ( array_merge($headers, $this->spaces->toArray()) as $row ) {
            $row = array_map( "utf8_decode", $row );
            fputcsv( $f, $row, ';' );
        }

        fclose( $f );


        $this->file = \Storage::url( 'spaces.csv' );


    }





    public function sendUpdateNotification( SpaceRegistration $space_registration ) {

        $space_registration->notify( new SpaceRegistrationUpdateNotification );
        $this->emit( 'sent', [ 'id' => $space_registration->id ] );

    }





    public function render() {

        return view( 'livewire.admin.space-donations' );
    }
}
