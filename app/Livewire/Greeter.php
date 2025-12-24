<?php

namespace App\Livewire;

use App\Models\Animals;
use App\Models\Coats;
use App\Models\Race;
use App\Models\Species;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Greeter extends Component
{
    use WithFileUploads;

    #[Validate('required')]
    public $name = '';

    #[Validate('required')]
    public $description = '';

    #[Validate('required|image|max:1024')]
    public $photo;

    #[Validate('required')]
    public $age;

    #[Validate('required')]
    public $species_name = '';

    public $race_name = '';

    public $race;

    public $coats_species = '';

    public $coats_species_id;

    public $race_id;

    public function mount()
    {
        $this->race = collect([]);
        $this->coats_species = collect([]);
    }

    public function updatedSpeciesName()
    {
        $this->race = Race::where('species_id', (int)$this->species_name)->get();
        $this->race_name = '';
        $this->updateCoats();
    }

    public function updateCoats()
    {
        $species_coats = Species::find($this->species_name);
        $this->coats_species = $species_coats->coats;
    }

    public function submit()
    {
        $this->validate();

        $path = $this->photo->store('photos', 'public');

        Animals::create([
            'name' => $this->name,
            'description' => $this->description,
            'photo_path' => $path,
            'species_id' => $this->species_name,
            'race_id' => $this->race,
            'coats_specy_id' => $this->coats_species_id,
            'age' => $this->age,
        ]);

        $this->reset(['name', 'description', 'photo', 'species_name', 'race_name', 'age', 'coats_species']);
        $this->race = collect([]);
        $this->coats_species = collect([]);
    }

    public function render()
    {
        return view('livewire.greeter', [
            'animals' => Animals::all(),
            'species' => Species::all(),
            'coats_species' => $this->coats_species,
            'race_id' => $this->race_id,
        ]);
    }
}
