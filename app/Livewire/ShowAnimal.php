<?php

namespace App\Livewire;

use App\Models\Animals;
use Livewire\Component;

class ShowAnimal extends Component
{
    public $searchAnimal = '';


    public function delete(Animals $animals) {

        $animals->delete();
    }

    public function render()
    {
        return view('livewire.show-animal', [
            'animals' => Animals::search($this->searchAnimal)->get(),
        ]);
    }
}
