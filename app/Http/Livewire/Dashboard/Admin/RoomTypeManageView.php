<?php

namespace App\Http\Livewire\Dashboard\Admin;

use App\Traits\RoomTrait;
use Livewire\Component;

class RoomTypeManageView extends Component
{
    use RoomTrait;

    public function render()
    {
        $room_types = $this->getAllRoomTypes();
        return view('livewire.dashboard.admin.room-type-manage-view',[
            'room_types' => $room_types
        ]);
    }
}
