<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class speciesFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->fake()->name(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ];
    }
}
