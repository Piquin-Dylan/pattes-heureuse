<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Animals extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description',
        'name', 'photo_path',
        'species_id',
        'race_id',
        'age',
        'coats_species',
        'coats_species_id',
        'coats_specy_id',
        'race',
    ];

    public static function search(mixed $searchAnimal)
    {
        return Animals::where('name', 'LIKE', "%$searchAnimal%");
    }

    public function species(): BelongsTo
    {

        return $this->belongsTo(Species::class);
    }

    public function coats(): BelongsTo
    {
        return $this->belongsTo(Coats::class,'coats_specy_id');
    }

}
