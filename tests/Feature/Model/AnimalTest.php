<?php

use App\Models\Animals;
use App\Models\Species;

it('is possible to retrieve animals from a species', function () {
    $species = Species::factory()
        ->has(Animals::factory()->count(2))
        ->create();

    $this->assertDatabaseCount('animals', 2);

    expect($species->animals->count())->toBe(2)
        ->and($species->animals()->count())->toBe(2);
});
