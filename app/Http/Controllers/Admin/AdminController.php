<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Available;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $events = array();
//        $slots = Available::with('user')->get();
        $pilots = User::with('availables')->where('email' ,'!=', 'admin@gmail.com')->get();
//        dd($slots[0]->availables);
//        dd($slots[0]->user->name);
        foreach ($pilots as $pilot)
        {
            foreach ($pilot->availables as $slot) {
                $events[] = [
                    'title' => $pilot->name,
                    'id' => $slot->id,
                    'start' => $slot->date_slot,
//                    'color' => 'black',
//                    'display' => 'background'
                ];
            }
        }

        return view('admin.dashboard', ['slots' => $events]);
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
