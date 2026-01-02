<?php

namespace App\Livewire;

use Livewire\Component;

class AnimalAdoption extends Component
{
    public function render()
    {
        return view('livewire.animal-adoption')->layout('components.layouts.client');
    }
}
