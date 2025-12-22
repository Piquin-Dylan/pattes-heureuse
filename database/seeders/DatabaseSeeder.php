<?php

namespace Database\Seeders;

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

        foreach ($data as $speciesName => $races) {
            $species = Species::create([
                'species_name' => $speciesName,
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
