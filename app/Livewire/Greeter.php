<?php

namespace App\Livewire;

use App\Models\Animals;
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

    public function mount()
    {
        $this->race = collect([]);
    }

    public function updatedSpeciesName()
    {
        $this->race = Race::where('species_id', (int)$this->species_name)->get();

        $this->race_name = '';
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
            'race_id' => $this->race_name,
            'age' => $this->age,
        ]);

        $this->reset(['name', 'description', 'photo', 'species_name', 'race_name','age']);
        $this->race = collect([]);
    }

    public function render()
    {
        return view('livewire.greeter', [
            'animals' => Animals::all(),
            'species' => Species::all(),
            'race' => $this->race,
        ]);
    }
}
