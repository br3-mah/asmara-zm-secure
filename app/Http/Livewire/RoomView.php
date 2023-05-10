<?php

namespace App\Http\Livewire;
use App\Traits\RoomTrait;
use Livewire\Component;

class RoomView extends Component
{
    use RoomTrait;
    public $rooms, $room_types;

    public function render()
    {
        $this->rooms = $this->getAllRooms();
        $this->room_types = $this->getAllRoomTypes2();
        return view('livewire.room-view');
    }


    public function toggleStatus($id){
        try {
            $this->toggleRoomStatus($id);
        } catch (\Throwable $th) {
            // dd($th);
        }
    }
}
