<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Animals;

class ShowAnimal extends Component
{
    public $searchAnimal = '';
    public $selectedAnimal = null;

    public function delete(Animals $animal)
    {
        $animal->delete();
    }


    public function render()
    {
        return view('livewire.animals.show-animal', [
            'animals' => Animals::search($this->searchAnimal)->get(),
        ]);
    }
}
