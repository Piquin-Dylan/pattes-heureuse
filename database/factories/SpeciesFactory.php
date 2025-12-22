<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SpeciesFactory extends Factory
{
    public function definition()
    {
        return [
            'species_name' => $this->faker->randomElement([
                'chat', 'chien', 'lapin'
            ]),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ];
    }
}
