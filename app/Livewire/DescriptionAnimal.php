<?php

namespace App\Livewire;

use AllowDynamicProperties;
use App\Models\Animals;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

 class DescriptionAnimal extends Component
{

     public Animals $animal;
    public function mount(Animals $animal)
    {

        $this->animal = $animal;
    }



     public function render()
     {
         $currentRoute = Route::currentRouteName();

         if ($currentRoute === 'client.descriptionAnimal') {
             return view('livewire.animals.description-animal')
                 ->layout('client.descriptionAnimal');
         }

         return view('livewire.animals.description-animal');
     }


 }
