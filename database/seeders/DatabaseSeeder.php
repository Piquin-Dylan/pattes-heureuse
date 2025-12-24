<?php

namespace Database\Seeders;

use App\Models\Coats;
use App\Models\Race;
use App\Models\Species;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

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
                $coats[$speciesName][] = Coats::create(['name' => $coatName]);
            }
        }

        foreach ($dataRaces as $speciesName => $races) {
            $species = Species::create([
                'species_name' => $speciesName,
            ]);

            foreach ($coats[$speciesName] as $coat) {
                $species->coats()->attach($coat->id);
            }

            foreach ($races as $raceName) {
                Race::create([
                    'race_name' => $raceName,
                    'species_id' => $species->id,
                ]);
            }
        }
    }
}
