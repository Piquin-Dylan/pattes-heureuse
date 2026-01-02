<?php

namespace App\Livewire;

use AllowDynamicProperties;
use App\Models\Animals;
use Livewire\Component;

 class DescriptionAnimal extends Component
{

    public $animal;

    public function mount(Animals $animal)
    {

        $this->animal = $animal;
    }

    public function render()
    {
        return view('livewire.animals.description-animal');
    }
}
