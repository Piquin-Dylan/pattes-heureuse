<?php

namespace App\Livewire;

use App\Models\Volunteer;
use Livewire\Component;

class ShowVolunteers extends Component
{
    public function render()
    {
        return view('livewire.show-volunteers',[
            'volunteers'=>Volunteer::all()
        ]);
    }
}
