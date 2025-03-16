<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SolarSystem;

class Planet extends Model
{
    use HasFactory;

    // Vul de fillable property in als je massa-assignment wilt toestaan
    protected $fillable = ['name', 'description', 'solar_system_id'];

    /**
     * Relatie: Een planeet behoort tot een zonnestelsel.
     */
    public function solarSystem()
    {
        return $this->belongsTo(SolarSystem::class);
    }
}
