<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/planets', function() {
    $planets = [
        [
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
        ],
        [
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
        ],
        [
            'name' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far that’s inhabited by living things.'
        ],
        [
            'name' => 'Jupiter',
            'description' => 'Jupiter is a gas giant and doesn’t have a solid surface, but it may have a solid inner core about the size of Earth.'
        ],
    ];
    if (request()->has('planets')) {
        $keuze = request('planets');
        $filter = collect($planets)->firstWhere('name', ucfirst($keuze));

        if ($filter) {
            return view('planets', ['planetss' => $filter]);
        }
    }
    return view('planets', ['planets' => $planets]);
});


Route::get('/planets/{planetName}', function ($planetName) {
    $filePath = resource_path("planets/" . ucfirst($planetName) . ".html");

    if (file_exists($filePath)) {
        $planetContent = file_get_contents($filePath);
        return $planetContent;
    }

    abort(404, 'Planet not found');
});