<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response; // Voor response() functie
use Illuminate\Support\Facades\File;   // Voor file_exists() en file_get_contents() functies
use Illuminate\Support\Facades\View;   // Voor view() functie

class PlanetController extends Controller
{
    public function index(Request $request)
    {
        $planets = DB::table('planets')->get();

        return view('index', ['planets' => $planets]);
    }

    public function show($planetName)
    {
        $filePath = resource_path("planets/" . ucfirst($planetName) . ".html");
    
        if (file_exists($filePath)) {
            $planetContent = file_get_contents($filePath);
            return response($planetContent)->header('Content-Type', 'text/html');
        }
    
        abort(404, 'Planet not found');
    }
    
    
}
