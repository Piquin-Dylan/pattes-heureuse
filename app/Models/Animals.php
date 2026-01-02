<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Animals extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'photo_path',
        'species_id',
        'race_id',
        'coats_species_id',
        'age',
    ];

    // Recherche simple
    public static function search(mixed $searchAnimal)
    {
        return self::where('name', 'LIKE', "%$searchAnimal%");
    }

    // Relations
    public function species(): BelongsTo
    {
        return $this->belongsTo(Species::class);
    }

    public function coats(): BelongsTo
    {
        return $this->belongsTo(Coats::class, 'coats_species_id');
    }

    public function race(): BelongsTo
    {
        return $this->belongsTo(Race::class);
    }
}
