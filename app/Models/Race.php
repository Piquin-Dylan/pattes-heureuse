<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Race extends Model
{
    protected $fillable = ['race_name', 'species_id'];

    public function species(): BelongsTo
    {
        return $this->belongsTo(Species::class);
    }
}
