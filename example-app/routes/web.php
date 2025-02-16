<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;

Route::get('/planets', [PlanetController::class, 'index']);
Route::get('/planets/{planetName}', [PlanetController::class, 'show'])->name('planets.show');




