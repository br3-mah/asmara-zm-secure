<?php

namespace App\Http\Livewire\Dashboard\Admin;

use App\Traits\RoomTrait;
use Livewire\Component;

class RoomManageView extends Component
{
    use RoomTrait;
    public $room_types;

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
}
