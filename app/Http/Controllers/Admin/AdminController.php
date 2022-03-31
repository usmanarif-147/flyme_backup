<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Available;
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


        $grouped = $slots->groupBy('date')->map(function($item){
            return $item->unique('user_id');
        });

        $keys = array_keys($grouped->toArray());
        $i = 0;

//        dd($grouped[$keys[3]]->count());

        foreach ($slots->unique('date') as $slot)
        {
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
        /**
         * fetch all pilots where relation exist and date matches in child table
        */
        $pilots = User::whereHas('availables', function ($query) use ($request) {
            $query->where('date', new Carbon($request->now));
        })->get();

        /**
         * fetch child table data
         */
        $pilots->load(['availables' => function($query) use ($request){
            $query->where('date', $request->now);
        }]);
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
