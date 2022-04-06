<?php

namespace Database\Seeders;

use App\Models\Timeslot;
use Illuminate\Database\Seeder;

class TimeslotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timeslots = [
            [
                'time_slot' => '09:00'
            ],
            [
                'time_slot' => '10:00'
            ],
            [
                'time_slot' => '14:00'
            ],
        ];

        foreach ($timeslots as $slot) {
            Timeslot::create($slot);
        }
    }
}
