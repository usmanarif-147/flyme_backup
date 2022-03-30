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
        $pilots = User::with('availables')->where('email' ,'!=', 'admin@gmail.com')->get();
        foreach ($pilots as $pilot)
        {
            foreach ($pilot->availables as $slot) {
                $events[] = [
                    'title' => $pilot->name,
                    'id' => $slot->id,
                    'start' => $slot->date_slot,
                ];
            }
        }

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
