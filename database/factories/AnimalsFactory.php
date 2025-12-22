<?php

namespace Database\Factories;

use App\Models\Animals;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnimalsFactory extends Factory
{
    protected $model = Animals::class;

    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'description' => $this->faker->sentence(50),
        ];
    }
}
