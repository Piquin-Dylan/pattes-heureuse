<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Volunteer extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description',
        "name", "email", "tel", "photo_path",
        'role'
    ];
}
