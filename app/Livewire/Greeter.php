<?php

namespace App\Livewire;

use App\Models\Animals;
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




    public function submit()
    {
        $this->validate();

        $path = $this->photo->store('photos', 'public');

        Animals::create([
            'name' => $this->name,
            'description' => $this->description,
            'photo_path' => $path,
        ]);

        $this->reset(['name', 'description', 'photo']);
    }

    public function render()
    {
        return view('livewire.greeter', [
            'animals' => Animals::all(),
        ]);
    }
}
