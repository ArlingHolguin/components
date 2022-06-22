<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Prueba extends Component
{

    public $isOpen = false;

    public function mount(){
      #code...
      $this->isOpen = true;
    }


    public function render()
    {
        return view('livewire.prueba');
    }

    public function inicio(){

        $this->isOpen;

    }

    public function medio(){
        $this->isOpen = true;
    }

    public function final(){
        $this->isOpen = true;
    }
}
