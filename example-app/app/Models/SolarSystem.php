<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolarSystem extends Model
{
    use HasFactory;

    // Relatie: Een zonnestelsel heeft veel planeten
    public function planets()
    {
        return $this->hasMany(Planet::class);
    }
}
