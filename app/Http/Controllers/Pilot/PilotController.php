<?php

namespace App\Http\Controllers\Pilot;

use App\Http\Controllers\Controller;
use App\Models\Available;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PilotController extends Controller
{
    public function dashboard()
    {
        $events = array();
        $slots = Available::where('user_id', auth()->id())->get()->map(function ($item) {
            return [
                'id' => $item->id,
                'date' => $item->date,
                'start' => $item->date_slot
            ];
        });

        $grouped = $slots->groupBy('date')->map(function ($item) {
            return $item->count();
        });
        $keys = array_keys($grouped->toArray());
        $i = 0;
        foreach ($slots->unique('date') as $slot) {
            $events[] = [
                'id' => $slot['id'],
                'start' => $slot['date'],
                'title' => 'Total available slots: ' . $grouped[$keys[$i]],
            ];
            $i++;
        }
        return view('pilot.dashboard', ['slots' => $events]);
    }

    public function getSelectedSlots(Request $request)
    {
        return Available::where('date', new Carbon($request->now))->where('user_id', auth()->id())->get();
    }

    public function storeSlot(Request $request)
    {
        $status = false;
        $bookedSlot = '';
        foreach ($request->slots as $slot) {
            try {
                $bookedSlot = Available::where('date_slot', new Carbon($slot))->where('user_id', auth()->id())->get();
                if ($bookedSlot->count() > 0) {
                    $status = true;
                }
            } catch (\Exception $ex) {
                return response()->json($ex->getMessage());
            }
        }
        if ($status) {
            return response()->json(["slot" => $bookedSlot, 'status' => 'exist']);
        }

        $arr = [];
        foreach ($request->slots as $slot) {
            $available = new Available();
            $available->user_id = auth()->id();
            $available->date = $slot;
            $available->slot = $slot;
            $available->date_slot = $slot;
            $available->color = '#257e4a';
            $available->save();
            array_push($arr, $available);
        }

        return response()->json([
            'slots' => $arr,
            'status' => 'new'
        ]);
    }

    public function removeSlot(Request $request)
    {
        $status = false;
        foreach ($request->slots as $slot) {
            try {
                if (Available::where('date_slot', new Carbon($slot))->where('user_id', auth()->id())->delete()) {
                    $status = true;
                }
            } catch (\Exception $ex) {
                return response()->json($ex->getMessage());
            }
        }
        if ($status) {
            return response()->json("selected slots deleted successfully");
        } else {
            return response()->json("no select slots found");
        }

//        $arr = [];
//        foreach ($request->slots as $slot)
//        {
//            $available = new Available();
//            $available->user_id = auth()->id();
//            $available->date = $slot;
//            $available->slot = $slot;
//            $available->date_slot = $slot;
//            $available->color = '#257e4a';
//            $available->save();
//            array_push($arr, $available);
//        }
//
//        return response()->json([
//            'slots' => $arr,
//            'status' => 'new'
//        ]);
    }


    public function bookings()
    {
        return view('pilot.bookings');
    }

    public function updatePassword()
    {
        return view('pilot.update_password');
    }

//    public function slots(Request $request)
//    {
//        if ($request->ajax()) {
//            $slots = [
//                [
//                    'title' => 'Available Slots',
//                    'start' => '2022-03-03',
////                    'constraint' => 'businessHours',
////                    'color' => '#257e4a'
//                ],
//                [
//                    'title' => 'Booked Sots',
//                    'start' => '2022-03-13',
////                    'constraint' => 'availableForMeeting',
////                    'color' => '#b68812'
//                ],
//                [
//                    'title' => 'Unavailable Slots',
//                    'start' => '2022-03-18',
////                    'end' => '#FF0000'
//                ],
//            ];
//            return response()->json($slots);
//        }
//    }
}
