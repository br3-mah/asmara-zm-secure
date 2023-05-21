<?php

namespace App\Http\Livewire\Dashboard\Admin;

use App\Models\Booking;
use App\Models\Room;
use App\Traits\RoomTrait;
use Livewire\Component;

class RoomManageView extends Component
{
    use RoomTrait;
    public $room_types;
    public $selectedRooms = [];

    public function render()
    {
        $rooms = $this->getAllRooms();
        $this->room_types = $this->getAllRoomTypes2();
        return view('livewire.dashboard.admin.room-manage-section',[
            'rooms' => $rooms
        ]);
    }

    public function toggleStatus($id){
        try {
            $this->toggleRoomStatus($id);
        } catch (\Throwable $th) {
            // dd($th);
        }
    }

    public function deleteRooms()
    {
        foreach($this->selectedRooms as $b){
            $room = Room::where('id', $b)->first();
            Booking::where('rooms_id', $room->id)->delete();
        }
        Room::whereIn('id', $this->selectedRooms)->delete();

        // Clear the selection after deleting users
        $this->selectedRooms = [];
        session()->flash('success', 'Rooms & Bookings deleted successfully.');
    }
}
