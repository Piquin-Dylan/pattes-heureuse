<?php

namespace Database\Factories;

use App\Models\Race;
use App\Models\Species;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class RaceFactory extends Factory
{
    protected $model = Race::class;

    public function definition()
    {
        $speciesRaces = [
            'chat' => ['Persan', 'Siamois', 'Maine Coon'],
            'chien' => ['Labrador', 'Caniche', 'Berger Allemand'],
            'lapin' => ['Bélier', 'Nain', 'Rex'],
        ];

        $speciesName = $this->faker->randomElement(array_keys($speciesRaces));

        $speciesId = Species::where('species_name', $speciesName)->first()->id;

        $raceName = $this->faker->randomElement($speciesRaces[$speciesName]);

        return [
            'race_name' => $raceName,
            'species_id' => $speciesId,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
