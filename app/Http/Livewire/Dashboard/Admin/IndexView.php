<?php

namespace App\Http\Livewire\Dashboard\Admin;

use App\Models\Reservation;
use App\Models\Room;
use Livewire\Component;

class IndexView extends Component
{
    public $tt_booking, $tt_inquiries, $checkin, $checkout, $tt_rooms_available, $tt_rooms_booked, $tt_total_site_visitors;

    public function render()
    {
        $this->tt_booking = Room::where('is_available', 0)->count();
        $this->tt_inquiries = Reservation::count();
        $this->checkin = Room::where('is_available', 0)->count();
        $this->checkout =  Room::where('is_available', 1)->count();
        $this->tt_rooms_available =  Room::where('is_available', 1)->count();
        $this->tt_rooms_booked =  Room::where('is_available', 1)->count();
        $this->tt_total_site_visitors = 0;

        return view('livewire.dashboard.admin.index-view');
    }
}
