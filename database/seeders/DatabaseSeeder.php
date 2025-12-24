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

        $data = [
            'Chat' => ['Persan', 'Siamois', 'Maine Coon'],
            'Chien' => ['Labrador', 'Caniche', 'Berger Allemand'],
            'Lapin' => ['Bélier', 'Rex'],
        ];
        $dataCoat = [
            'Chat' => ['Court', 'Long', 'Frisé'],
            'Chien' => ['Court', 'Long', 'Double couche'],
            'Lapin' => ['Court', 'Long', 'Angora'],
        ];

        $coats = [];
        foreach ($dataCoat as $speciesName => $coatsArray) {
            foreach ($coatsArray as $coatName) {
                $coats[$speciesName][] = Coats::create(['name' => $coatName]);
            }
        }

// 2. Seed species avec coat_id
        foreach ($data as $speciesName => $races) {
            $species = Species::create([
                'species_name' => $speciesName,
                'coat_id' => $coats[$speciesName][0]->id,
            ]);


            foreach ($races as $raceName) {
                Race::create([
                    'race_name' => $raceName,
                    'species_id' => $species->id,
                ]);
            }
        }
    }
}
