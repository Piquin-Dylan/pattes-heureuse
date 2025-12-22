<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ButtonDelete extends Component
{
    public function render()
    {
        return view('livewire.button-delete');
    }


    public function delete($animal){

        $this->authorize('delete',$animal);

        $animal->delete();
    }
}
