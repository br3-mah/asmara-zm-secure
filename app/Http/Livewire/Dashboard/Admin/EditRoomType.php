<?php

namespace App\Http\Livewire\Dashboard\Admin;

use App\Traits\RoomTrait;
use Livewire\Component;

class EditRoomType extends Component
{
    use RoomTrait;
    public $type;

    
    public function mount($id){
        $this->type = $this->getRoomType($id);
    }

    public function render()
    {
        return view('livewire.dashboard.admin.edit-room-type');
    }
}
