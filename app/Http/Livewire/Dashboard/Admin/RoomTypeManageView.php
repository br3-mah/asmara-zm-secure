<?php

namespace App\Http\Livewire\Dashboard\Admin;

use App\Traits\RoomTrait;
use Livewire\Component;

class RoomTypeManageView extends Component
{
    use RoomTrait;
    public $room_types;

    public function render()
    {
        $this->room_types = $this->getAllRoomTypes();
        return view('livewire.dashboard.admin.room-type-manage-view');
    }
}
