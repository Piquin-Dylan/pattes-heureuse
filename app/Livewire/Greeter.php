<?php

namespace App\Livewire;

use App\Models\Animals;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Greeter extends Component
{
    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $description = '';

    public function submit()
    {
        $this->validate();

        Animals::create([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        $this->reset(['title', 'description']);
    }

    public function render()
    {
        return view('livewire.greeter');
    }
}
