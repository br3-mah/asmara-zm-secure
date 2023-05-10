<?php

namespace App\Http\Livewire\Dashboard\Admin;

use App\Models\User;
use App\Traits\BookTrait;
use Livewire\Component;

class GuestInfoView extends Component
{
    use BookTrait;
    public $user, $reservations, $inquiries, $hasCurrentBooking, $lastBooking;

    public function mount($id){
        $this->user = User::where('id', $id)->with('guests')->first();
        $this->hasCurrentBooking = $this->hasCurrentBooking($this->user->guests->id);
        $this->lastBooking = $this->getLastBooking($this->user->guests->id);
        
    }

    public function render(){
        $bookings = $this->getCustomerBookings($this->user->guests->id);
        return view('livewire.dashboard.admin.guest-info-view',[
            'bookings' => $bookings
        ]);
    }
}
