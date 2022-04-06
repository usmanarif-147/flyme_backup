<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Available;
use App\Models\Flight;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $events = array();
        $slots = Available::all()->map(function ($item) {
            return [
                'id' => $item->id,
                'date' => $item->date,
                'start' => $item->date_slot,
                'user_id' => $item->user_id
            ];
        });

        $grouped = $slots->groupBy('date')->map(function ($item) {
            return $item->unique('user_id');
        });

        $keys = array_keys($grouped->toArray());
        $i = 0;

        foreach ($slots->unique('date') as $slot) {
            $events[] = [
                'id' => $slot['id'],
                'start' => $slot['date'],
                'title' => 'Total pilots available: ' . $grouped[$keys[$i]]->count(),
            ];
            $i++;
        }

//        dd($events);
        return view('admin.dashboard', ['slots' => $events]);
    }

    public function availablePilotsAjax(Request $request)
    {
        $flights = Flight::all()->map(function ($flight) use ($request) {
            return [
                'id' => $flight->id,
                'name' => $flight->name,
                'timeslots' => $flight->timeslots->map(function ($timeslot) use ($request) {
                    return [
                        'id' => $timeslot->id,
                        'time_slot' => timeDayFormat($timeslot->time_slot),
                        'pilots' => $this->getPilots($request->now.'T'.timeWithoutSecondsFormat($timeslot->time_slot)),
//                        'day_slot' => $request->now.'T'.timeWithoutSecondsFormat($timeslot->time_slot)
                    ];
                })
            ];
        });
        /**
         * fetch all pilots where relation exist and date matches in child table
         */
        $pilots = User::whereHas('availables', function ($query) use ($request) {
            $query->where('date', new Carbon($request->now));
        })->get();

        /**
         * fetch child table data
         */
        $pilots = $pilots->load(['availables' => function ($query) use ($request) {
            $query->where('date', $request->now);
        }]);

        $pilots = $pilots->map(function ($pilot) {
            return [
                'id' => $pilot->id,
                'name' => $pilot->name,
                'time_slots' => $pilot->availables->map(function ($available) {
                    return [
                        'id' => $available->id,
                        'date' => $available->date,
                        'time' => $available->slot,
                        'date_slot' => $available->date_slot
                    ];
                })
            ];
        });

        return response()->json(['pilots' => $pilots, 'flights' => $flights]);
    }

    private function getPilots($slot)
    {
        return Available::with('user')->where('date_slot', new Carbon($slot))->get()->map(function ($item) {
            return [
                'id' => $item->id,
                'pilot_id' => $item->user->id,
                'pilot_name' => $item->user->name
            ];
        });
    }

    public function availablePilotsForFlightAjax(Request $request)
    {
        $pilots = Available::with('user')->where('date_slot', new Carbon($request->slot))->get()->map(function ($item) {
            return [
                'id' => $item->id,
                'pilot_id' => $item->user->id,
                'pilot_name' => $item->user->name
            ];
        });
        return response()->json($pilots);
    }

    public function bookings()
    {
        return view('admin.bookings');
    }

    public function paymentTransactions()
    {
        return view('admin.payment_transactions');
    }

    public function pilots()
    {
        return view('admin.pilots');
    }

    public function pilotDetails()
    {
        return view('admin.pilot_details');
    }

    public function updatePassword()
    {
        return view('admin.update_password');
    }

}
