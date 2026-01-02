<?php

namespace App\Livewire;

use App\Models\Adoption;
use Livewire\Component;

class ShowAdoption extends Component
{
    public function render()
    {
        return view('livewire.show-adoption',[
            'adoptions'=>Adoption::all()
        ]);
    }
}
