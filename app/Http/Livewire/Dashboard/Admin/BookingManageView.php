<?php

namespace App\Http\Livewire\Dashboard\Admin;

use App\Models\Booking;
use App\Models\Guest;
use App\Models\Room;
use App\Models\User;
use App\Traits\BookTrait;
use App\Traits\RoomTrait;
use App\Traits\UserTrait;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class BookingManageView extends Component
{
    use RoomTrait, UserTrait, BookTrait;
    public $guests, $room_types, $rooms;
    public $country, $fname, $checkin_date, $checkout_date, $num_adults, $num_children;
    public $lname, $email, $message, $user, $book_room_id, $room, $reservation;
    public $selectedBookings = [];

    public function render()
    {
        $this->rooms = $this->getAvailableRooms();
        // Get Booking with room information
        $bookings = $this->getBookings();
        $this->guests = $this->getGuests();
        $this->room_types = $this->getAllRoomTypes2();
        return view('livewire.dashboard.admin.booking-manage-view',[
            'bookings' => $bookings
        ]);
    }

    public function toggleStatus($id){
        try {
            $this->toggleRoomStatus($id);
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function checkOut($id){
        try {
            $booking = $this->toggleBookingStatus($id);
            $this->toggleRoomStatus($booking->rooms_id);
            session()->flash('success', 'Checkout Successfully.');
        } catch (\Throwable $th) {
            session()->flash('error', 'Oh, Something went wrong, check your connection and try again.');
            // dd($th);
        }
    }
    
    public function makeBooking(){
        try {
            
            $user = $this->registerGuestUser();
            $room = Room::where('id', $this->book_room_id)
                        ->where('is_available', 1)->with('room_types')->first();
            if($room !== null){
                $room->is_available = 0;
                $room->save();
    
                $data = [
                    'guest_id' => $user->id,
                    'room_id' => $this->book_room_id,
                    'in' => $this->checkin_date,
                    'out' =>  $this->checkout_date,
                    'adults' =>  $this->num_adults,
                    'children' =>  $this->num_children,
                    'price' =>  $room->room_types->price
                ];
                $this->saveBooking($data);
                session()->flash('success', 'Room successfully booked.');
            }else{
                session()->flash('error', 'Make sure to select a room before submitting or check the calendar for next available dates.');
            }
        } catch (\Throwable $th) {
            session()->flash('error', 'Connection failure, email failed to send.');
        }
    }

    public function registerGuestUser(){
        $password = 'asmara4Gud';
        $check = User::where('email', $this->email)->first();
        if($check == null){
            try {

                $user = User::create([
                    'fname' => $this->fname,
                    'lname' => $this->lname,
                    'email' => $this->email,
                    'password' => Hash::make($password),
                    'terms' => 'accepted'
                ]);
                
                Guest::create([
                    'user_id' => $user->id,
                    'country' => $this->country
                ]);
                return $user;
            } catch (\Throwable $th) {
                return [];
            }
        }else{
            return $check;
        }
        
    }

    public function deleteBookings()
    {
        foreach($this->selectedBookings as $b){
            $book = Booking::where('id', $b)->first();
            $this->toggleRoomStatus($book->rooms_id);
        }
        Booking::whereIn('id', $this->selectedBookings)->delete();

        // Clear the selection after deleting users
        $this->selectedBookings = [];
        session()->flash('message', 'Bookings deleted successfully.');
    }
}
