<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Initiator;



class Initiators extends Component
{

    public $name;

    public $link;


    public $initiators;


    protected $rules = [
      'name' => 'string|required',
      'link' => 'url|nullable'
    ];


    public function mount(){

        $this->initiators = Initiator::all()->toArray();

    }


    public function submit(){


        Initiator::create($this->validate());

        $this->reset('name', 'link');

        $this->initiators = Initiator::all()->toArray();

    }


    public function delete(Initiator $initiator){
        $initiator->delete();
        $this->initiators = Initiator::all()->toArray();

    }


    public function render()
    {
        return view('livewire.admin.initiators');
    }
}
