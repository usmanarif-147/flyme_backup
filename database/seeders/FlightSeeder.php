<?php

namespace Database\Seeders;

use App\Models\Flight;
use App\Models\Timeslot;
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
        $timeslots = Timeslot::all()->pluck('id')->toArray();
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
            $flight = Flight::create($flight);
            $flight->timeslots()->sync($timeslots);
        }
    }
}
