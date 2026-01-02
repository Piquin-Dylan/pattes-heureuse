<?php

namespace Database\Seeders;

use App\Models\Coats;
use App\Models\Race;
use App\Models\Species;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $dataRaces = [
            'Chat' => ['Persan', 'Siamois', 'Maine Coon'],
            'Chien' => ['Labrador', 'Caniche', 'Berger Allemand'],
            'Lapin' => ['Bélier', 'Rex'],
        ];

        $dataCoats = [
            'Chat' => ['Court', 'Long', 'Frisé'],
            'Chien' => ['Court', 'Long', 'Double couche'],
            'Lapin' => ['Court', 'Long', 'Angora'],
        ];

        $coats = [];

        foreach ($dataCoats as $speciesName => $coatsArray) {
            foreach ($coatsArray as $coatName) {
                $coats[$speciesName][] = Coats::firstOrCreate([
                    'name' => $coatName,
                ]);
            }
        }

        foreach ($dataRaces as $speciesName => $races) {
            $species = Species::firstOrCreate([
                'species_name' => $speciesName,
            ]);

            $species->coats()->syncWithoutDetaching(
                collect($coats[$speciesName])->pluck('id')->toArray()
            );

            foreach ($races as $raceName) {
                Race::firstOrCreate([
                    'race_name' => $raceName,
                    'species_id' => $species->id,
                ]);
            }
        }
    }
}
