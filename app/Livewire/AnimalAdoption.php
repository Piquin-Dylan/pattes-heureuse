<?php

namespace App\Livewire;

use App\Models\Adoption;
use App\Models\Animals;
use Livewire\Attributes\Validate;
use Livewire\Component;

class AnimalAdoption extends Component
{
    #[Validate('required')]
    public $name = "";

    public $email = "";

    public $tel = "";



    public Animals $animal;

    public function mount(Animals $animal)
    {

        $this->animal = $animal;
    }

    public function submit()
    {
        $this->validate();

        Adoption::create([
            'animal_id' => $this->animal->name,
            'name' => $this->name,
            'email'=>$this->email,
            'tel'=>$this->tel
        ]);
        $this->reset(['name','email','tel']);

    }

    public function render()
    {
        return view('livewire.animal-adoption');
    }
}
