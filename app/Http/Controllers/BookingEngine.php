<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class BookingEngine extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function checkRoomAvailability(Request $request)
    {
        // process the form data
        $data = Room::where('room_types_id', $request->input('room_type'))
                    ->where('num_adult', '>=' , $request->input('adult_num'))
                    ->where('num_children', '>=', $request->input('children_num') + 1)
                    ->where('is_available', 1)
                    ->get();
        // Search from the booked rooms about to checkout
        // "check_in_date" => "03/01/2023"
        // "check_out_date" => "03/01/2023"
        if(!empty($data->toArray())){
            return response()->route('available-rooms', ['data' => $data]);
        }else{
            return response()->json([
                'message' => 'No Rooms Founds. Please check other types of rooms.'
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function saveReservation(Request $request)
    {
        return response()->json([
            'message' => 'Form submitted successfully'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function saveBooking(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
