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

    // Sélectionner l'animal à afficher
    public function selectAnimal($animalId)
    {
        $this->selectedAnimal = Animals::find($animalId);
        // Pas besoin de $this->emit ici
    }

    // Méthode pour confirmer l'adoption
    public function adoptAnimal($animalId)
    {
        $animal = Animals::find($animalId);
        session()->flash('message', "Vous avez choisi d'adopter {$animal->name} !");
    }

    public function render()
    {
        return view('livewire.animals.show-animal', [
            'animals' => Animals::search($this->searchAnimal)->get(),
        ]);
    }
}
