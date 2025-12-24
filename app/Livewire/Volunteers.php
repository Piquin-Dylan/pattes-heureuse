<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Volunteers extends Component
{

    #[Validate('required')]
    public $name = "";

    #[Validate('required')]
    public $email = "";

    #[Validate('required')]
    public $tel = "";

    #[Validate('required')]
    public $role = "";

    public function render()
    {
        return view('livewire.volunteers');
    }

    public function submit()
    {

        $this->validate();
    }
}
