<?php

use App\Models\Animals;
use App\Models\Species;


it('can create an animal and associate it with a species', function () {
    $species = Species::factory()->create([
        'species_name' => 'Chat'
    ]);


    $animal = Animals::factory()
        ->for($species)
        ->create([
            'name' => 'Luna',
            'description' => 'Chat doux et tigré',
            'photo_path' => 'luna.jpg'
        ]);

    expect($animal->species->id)->toBe($species->id)
        ->and($animal->species->species_name)->toBe('Chat')
        ->and($species->animals->contains($animal))->toBeTrue();

    $this->assertDatabaseHas('animals', [
        'id' => $animal->id,
        'species_id' => $species->id,
        'name' => 'Luna'
    ]);
});


it('is possible to retrieve animals from a species', function () {
    $species = Species::factory()
        ->has(Animals::factory()->count(2))
        ->create();

    $this->assertDatabaseCount('animals', 2);

    expect($species->animals->count())->toBe(2)
        ->and($species->animals()->count())->toBe(2);
});
