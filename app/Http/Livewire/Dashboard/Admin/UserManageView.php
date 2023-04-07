<?php

namespace App\Http\Livewire\Dashboard\Admin;

use App\Models\User;
use Livewire\Component;

class UserManageView extends Component
{
    public function render()
    {
        $users = User::whereNot('id', 1)->paginate(7);
        return view('livewire.dashboard.admin.user-manage-view',[
            'users' => $users
        ]);
    }
}
