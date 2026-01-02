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

    #[Validate('required|integer')]
    public $age;

    #[Validate('required|integer')]
    public $species_name = '';

    public $race_id = '';
    public $coats_species_id = '';

    public $race = [];
    public $coats_species = [];

    public function mount()
    {
        $this->race = collect([]);
        $this->coats_species = collect([]);
    }

    public function updatedSpeciesName()
    {
        $this->race = Race::where('species_id', (int)$this->species_name)->get();
        $this->race_id = '';
        $this->updateCoats();
    }

    public function updateCoats()
    {
        $species = Species::find($this->species_name);
        $this->coats_species = $species ? $species->coats : collect([]);
        $this->coats_species_id = '';
    }

    public function submit()
    {
        $this->validate();

        $path = $this->photo->store('photos', 'public');

        Animals::create([
            'name' => $this->name,
            'description' => $this->description,
            'photo_path' => $path,
            'species_id' => (int)$this->species_name,
            'race_id' => (int)$this->race_id,
            'coats_species_id' => (int)$this->coats_species_id,
            'age' => (int)$this->age,
        ]);

        $this->reset(['name', 'description', 'photo', 'species_name', 'race_id', 'coats_species_id', 'age']);
        $this->race = collect([]);
        $this->coats_species = collect([]);
    }

    public function render()
    {
        return view('livewire.animals.greeter', [
            'animals' => Animals::all(),
            'species' => Species::all(),
            'race' => $this->race,
            'coats_species' => $this->coats_species,
        ]);
    }
}
