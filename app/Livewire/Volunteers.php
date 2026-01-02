<?php

namespace App\Livewire;

use App\Models\Volunteer;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class Volunteers extends Component
{
    use WithFileUploads;

    #[Validate('required|string|max:255')]
    public $name = '';

    #[Validate('required|email|unique:volunteers,email')]
    public $email = '';

    #[Validate('nullable|string|max:20')]
    public $tel = '';


    #[Validate('nullable|image|max:2048')]
    public $image;

    public function submit()
    {
        $this->validate();

        $photoPath = null;
        if ($this->image) {
            $photoPath = $this->image->store('volunteers', 'public');
        }

        Volunteer::create([
            'name' => $this->name,
            'email' => $this->email,
            'tel' => $this->tel,
            'photo_path' => $photoPath,
        ]);

        $this->reset(['name', 'email', 'tel', 'image']);

        session()->flash('message', 'Bénévole créé avec succès !');
    }

    public function render()
    {
        return view('livewire.volunteers', [
            'volunteers' => Volunteer::all(),
        ]);
    }
}
