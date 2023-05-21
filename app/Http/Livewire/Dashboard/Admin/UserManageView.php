<?php

namespace App\Http\Livewire\Dashboard\Admin;

use App\Models\User;
use Livewire\Component;

class UserManageView extends Component
{
    public $selectedUsers = [];
    
    public function render()
    {
        $users = User::whereNot('id', 1)->paginate(7);
        return view('livewire.dashboard.admin.user-manage-view',[
            'users' => $users
        ]);
    }

    public function deleteUsers()
    {
        User::whereIn('id', $this->selectedUsers)->delete();

        // Clear the selection after deleting users
        $this->selectedUsers = [];

        session()->flash('message', 'Users deleted successfully.');
    }
}
