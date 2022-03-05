<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\SpaceRegistration;



class SpaceDonations extends Component {





    public $spaces;



    public $file;



    public $sqm;



    public function mount() {

        $this->spaces = SpaceRegistration::all();

    }





    public function export() {

        $filename = 'spaces.csv';

// open csv file for writing
        $f = fopen( storage_path('app/public/' . $filename), 'w' );

        if ( $f === false ) {
            die( 'Error opening the file ' . $filename );
        }

// write each row at a time to a file
        foreach ( $this->spaces->toArray() as $row ) {
            $row = array_map("utf8_decode", $row);
            fputcsv( $f, $row, ';' );
        }

        fclose($f);


        $this->file = \Storage::url('spaces.csv');


    }





    public function render() {

        return view( 'livewire.admin.space-donations' );
    }
}
