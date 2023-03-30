<?php

namespace App\Http\Livewire\Dashboard\Admin;

use App\Traits\BookTrait;
use Livewire\Component;

class BookingCalendarView extends Component
{
    use BookTrait;

    public $events;

    public function render()
    {
        $this->events = $this->getCalendarBookings();
        return view('livewire.dashboard.admin.booking-calendar-view');
    }
}
