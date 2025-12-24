<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Coats extends Model
{
    use HasFactory;

    protected $fillable = ['coat_name'];

    public function species(): BelongsToMany
    {

        return $this->belongsToMany(Species::class, 'coats_species');
    }
}
