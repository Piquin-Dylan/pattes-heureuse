<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadImage extends Component
{
    use WithFileUploads;

    #[Validate('required|image|max:1024')]
    public $photo;

    public function save()
    {
        $path = $this->photo->store('photos', 'public');

    }

    public function render()
    {
        return view('livewire.upload-image');
    }
}
