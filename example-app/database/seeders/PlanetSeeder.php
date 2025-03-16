<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetSeeder extends Seeder
{
    public function run()
    {
        DB::table('planets')->insert([
            'name' => 'Earth',
            'solar_system_id' => 1,  // Zorg ervoor dat je een geldig solar_system_id hebt
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far that’s inhabited by living things.',
        ]);
    
        DB::table('planets')->insert([
            'name' => 'Mars',
            'solar_system_id' => 1,
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.',
        ]);

        DB::table('planets')->insert([
            'name' => 'Jupiter',
            'solar_system_id' => 1,
            'description' => 'Jupiter is a gas giant and doesnt have a solid surface, but it may have a solid inner core about the size of Earth.',
        ]);

        DB::table('planets')->insert([
            'name' => 'Venus',
            'solar_system_id' => 1,
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.',
        ]);
    }
    
}
