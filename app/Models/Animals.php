<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    protected $fillable = ['title', 'description',
        'name','photo_path'
    ];

    public static function search(mixed $searchAnimal)
    {
      return  Animals::where('name', 'LIKE', "%$searchAnimal%");
    }
}
