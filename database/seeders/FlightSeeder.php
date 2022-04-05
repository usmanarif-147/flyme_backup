<?php

namespace Database\Seeders;

use App\Models\Flight;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flights = [
            [
                'name' => "Gleitflug",
            ],
            [
                'name' => "Happy Flug",
            ],
            [
                'name' => "Über den Gipfel",
            ],
            [
                'name' => "Actionflug",
            ],
            [
                'name' => "Bergwelt Panoramaflug",
            ],
        ];

        foreach ($flights as $flight)
        {
            Flight::create($flight);
        }
    }
}
