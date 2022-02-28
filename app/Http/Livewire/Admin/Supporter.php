<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;



class Supporter extends Component {





    use WithFileUploads;



    public $name;





    public $link;





    public $photo;





    public $supporter;





    protected $rules = [
        'name'  => 'string|required',
        'link'  => 'url|nullable',
        'photo' => 'image|max:1024',
    ];





    public function mount() {

        $this->supporter = \App\Models\Supporter::all()->toArray();

    }





    public function submit() {

        $this->validate();

        $supporter = \App\Models\Supporter::create( [
            'name' => $this->name,
            'link'  => $this->link,
        ] );

        $supporter->updateProfilePhoto($this->photo);


        $this->reset();

        $this->supporter = \App\Models\Supporter::all()->toArray();


    }





    public function delete( \App\Models\Supporter $supporter ) {

        $supporter->delete();
        $this->supporter = \App\Models\Supporter::all()->toArray();

    }





    public function render() {

        return view( 'livewire.admin.supporter' );
    }
}
