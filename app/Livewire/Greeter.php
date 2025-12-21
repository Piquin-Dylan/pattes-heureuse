<?php

namespace App\Livewire;

use App\Models\Animals;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Greeter extends Component
{
    #[Validate('required')]
    public $name = '';

    #[Validate('required')]
    public $description = '';

    public function submit()
    {
        $this->validate();

        Animals::create([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        $this->reset(['name', 'description']);
    }

    public function render()
    {
        return view('livewire.greeter',[
            'animals'=> Animals::all()
        ]);

    }
}
