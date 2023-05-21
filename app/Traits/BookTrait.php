<?php

namespace App\Traits;

use App\Models\Booking;
use App\Models\Reservation;
use App\Models\ReservationList;
use App\Models\Room;
use App\Models\RoomType;
use App\Models\User;
use App\Notifications\BookingInquiryNotification;
use App\Notifications\GuestInquiryNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;
use Livewire\WithPagination;



trait BookTrait {
    use UserTrait, RoomTrait, DateTrait, WithPagination;
    
    public function totalBookings(){
        return Booking::count();
    }

    public function totalCheckIns(){
        return Booking::whereNot('booking_status', 0)->count();
    }
    
    public function totalCheckOuts(){
        return Booking::where('booking_status', 0)->count();
    }

    // Get all Booking inquiries
    public function getBookingInquiries(){
        return ReservationList::orderByDesc('created_at')->paginate(10);
        // return Reservation::get()->paginate(10);
    }

    // Get all Booking inquiries
    public function hasCurrentBooking($guest_id){
        return Booking::orderByDesc('created_at')->where('guests_id', $guest_id)->exists();
        // return Reservation::get()->paginate(10);
    }

    public function hasCurrentReservation($guest_id){
        return ReservationList::orderByDesc('created_at')->where('guests_id', $guest_id)->exists();
    }

    public function getLastBooking($guest_id){
        return Booking::orderByDesc('created_at')->with('room.room_types')->where('guests_id', $guest_id)->first();
    }

    public function getLastReservation($guest_id){
        return ReservationList::orderByDesc('created_at')->where('guests_id', $guest_id)->first();
    }
    
    // Get all Booking inquiries
    public function getCustomerBookings($guest_id){
        return Booking::orderByDesc('created_at')->where('guests_id', $guest_id)->paginate(5);
    }

    // Returns all booked rooms with booking information dates
    public function getBookings(){
        return Booking::orderByDesc('created_at')->with('room.room_types')
                    ->with('guests.users')->paginate(9);
    }

    // Returns all booked rooms with booking information dates
    public function getCalendarBookings(){
        $events = [];
        $bookings = Booking::get()->toArray();
        $total_rooms = $this->getTotalRooms();
        // Merge booked rooms
        foreach($bookings as $b){
            $events = [
                'title' => count($bookings).' Booked Rooms',
                'url' => '/calendar-and-bookings',
                'start' => $this->convertNormal($b['checkin_date']),
                'end' => $this->convertNormal($b['checkout_date']),
                'className' => 'bg-danger'
            ];
            
            // $events = [
            //     'title' => $total_rooms - count($bookings).' Rooms Available',
            //     'url' => '/calendar-and-bookings',
            //     'start' => $this->convertNormal($b['checkin_date']),
            //     'end' => $this->convertNormal($b['checkout_date']),
            //     'className' => 'bg-success'
            // ];
        }
        return $events;
        

        // // Merge available rooms
        foreach ($bookings as $a) {
           $x = $this->getFreeRoomOnDate($a['checkin_date'], $a['checkout_date']);
            //   dd($x);
        }
    }

    // Returns all available rooms on a specific date range
    public function getFreeRoomOnDate($from, $to){

    }


    public function checkAvailability($request){
        return Room::with('categories')
        ->where('room_types_id', $request->input('room_type'))
        ->where('num_adult', '>=' , $request->input('adult_num'))
        ->where('num_children', '>=', $request->input('children_num') + 1)
        ->where('is_available', 1)
        ->get();
    }

    public function makeReservation($request){
        $admin = User::where('id', 1)->first();
        
        // Enter User Information
        $user = $this->registerUser($request);
        $in = $this->convertNormal($request->input('check_in_date'));
        $out = $this->convertNormal($request->input('check_out_date'));
        $nights = $this->numOfDays($in, $out);
        $total_bill = $nights * RoomType::where('name', $request->input('room_type'))->first()->price;
     
        $data = ReservationList::create([
            'guests_id' => $user->id,
            'reservation_date' => now(),
            'reservation_code' => Str::orderedUuid(4),
            'checkin_date' => $this->readDate($in),
            'checkout_date' =>  $this->readDate($out),
            'num_adults' => $request->input('adult_num'),
            'num_children' => $request->input('children_num'),
            'special_requests' => $request->input('special_requests'),
            'is_confirmed' => 0,
            'is_cancelled' => 0
        ]);

        $note = [
            'name' => ReservationList::fullName($user->id),
            'msg' => "You have received a new booking inquiry. Date of Arival ".$this->readDate($in)." and Date of Departure ".$this->readDate($out).". Total billing of K".$total_bill,
            'type' => 'inquiry',
            'special_req' => $request->input('special_requests') ?? 'None',
            'in' => $request->input('check_in_date'),
            'out' => $request->input('check_out_date'),
            'room_type' => $request->input('room_type'),
            'bill' => 'K'.$total_bill,
            'duration' => $nights,
            'user_id' => $user->id,
            'data_id' => $data->id
        ];
        Notification::send($admin, new BookingInquiryNotification($note));
        Notification::send($user, new GuestInquiryNotification($note));
        if(!empty($data->toArray())){
            return true;
        }else{
            return false;
        }
        return true;
    }

    public function saveBooking($data){
        $admin = User::first();
        // Enter reservation information
        if (isset($data['reserve_id'])) {
            $reserv = ReservationList::where('id', $data['reserve_id'])->first();
        }
        $theroom = Room::with('room_types')->where('id', $data['room_id'])->first();
        // $in = $this->convertNormal($data['in']);
        // $out = $this->convertNormal($data['out']);
        $nights = $this->numOfDays($data['in'], $data['out']);
        $total_bill = $nights * RoomType::where('name', $theroom->room_types->name)->first()->price;
        
        $book = Booking::create([
            'guests_id' => $data['guest_id'],
            'rooms_id' => $data['room_id'],
            'reservations_id' => isset($data['reserve_id']) ? $data['reserve_id'] : null,
            'user_id' => auth()->user()->id,
            'booking_code' => Str::orderedUuid(4),
            'checkin_date' => $data['in'],
            'checkout_date' => $data['out'],
            'num_adults' => $data['adults'],
            'num_children' => $data['children'],
            'booking_date' => now(),
            'total_price' => $data['price'],
            'payment_status' => 1,
            'booking_status' => 1
        ]);

        $note = [
            'name' => ReservationList::fullName($data['guest_id']),
            'msg' => "Booked Room. Date checked in ".$data['in']." and Date of Check-out ".$data['out'],
            'type' => 'booking',
            'room_type' => $theroom->room_types->name,
            'special_req' =>  isset($data['reserve_id']) ?  $reserv->special_requests : 'None',
            'in' => $data['in'],
            'out' => $data['out'],
            'bill' => 'K'.$total_bill,
            'duration' => $nights,
            'user_id' => $data['guest_id'],
            'data_id' => $book->id
        ];
        Notification::send($admin, new BookingInquiryNotification($note));
        Notification::send($this->user, new GuestInquiryNotification($note));
        if(!empty($book->toArray())){
            return true;
        }else{
            return false;
        }
    }

    public function toggleBookingStatus($book_id){
        $booking = Booking::where('id', $book_id)->first();
        $booking->booking_status = 0;
        $booking->save();
        return $booking;
    }

    public function acceptInquiry($id){
        // $inq = Reservation::where('id', $id)->first();
        $inq = ReservationList::where('id', $id)->first();
        $inq->is_confirmed = 1;
        $inq->is_cancelled = 0;
        $inq->save();
    }

    public function denyInquiry($id){
        // $inq = Reservation::where('id', $id)->first();
        $inq = ReservationList::where('id', $id)->first();
        $inq->is_confirmed = 1;
        $inq->is_cancelled = 1;
        $inq->save();
    }
}