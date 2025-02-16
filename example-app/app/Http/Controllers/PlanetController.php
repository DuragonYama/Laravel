<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanetController extends Controller
{
    private $planets = [
        [
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.',
        ],
        [
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.',
        ],
        [
            'name' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far that’s inhabited by living things.',
        ],
        [
            'name' => 'Jupiter',
            'description' => 'Jupiter is a gas giant and doesn’t have a solid surface, but it may have a solid inner core about the size of Earth.',
        ],
    ];

    public function index(Request $request)
    {
        return view('index', ['planets' => $this->planets]);

    }

    public function show($planetName)
    {
        $filePath = resource_path("planets/" . ucfirst($planetName) . ".html");

        if (file_exists($filePath)) {
            $planetContent = file_get_contents($filePath);
            return response($planetContent);
        }

        abort(404, 'Planet not found');
    }
}
