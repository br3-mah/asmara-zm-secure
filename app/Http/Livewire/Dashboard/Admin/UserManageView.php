<?php

namespace App\Http\Livewire\Dashboard\Admin;

use App\Models\User;
use Livewire\Component;

class UserManageView extends Component
{
    public $selectedUsers = [];
    public $selectAll = false;
    protected $queryString = ['selectedUsers'];

    public function render()
    {
        $users = User::whereNot('id', 1)->paginate(500);
        return view('livewire.dashboard.admin.user-manage-view',[
            'users' => $users
        ]);
    }

    // public function updatedSelectAll()
    // {
    //     $this->selectAll = !$this->selectAll;
        
    //     if (!$this->selectAll) {
    //         $this->selectedUsers = User::whereNot('email', 'admin@asmarahotelzm.com')
    //             ->whereNot('email', 'frontoffice@asmarahotelzm.com')
    //             ->take(500)
    //             ->pluck('id','email')->map(fn ($id) => (string)$id)->toArray();
    //         dd($this->selectedUsers);
    //     } else {
    //         $this->selectedUsers = [];
    //         // dd('initialized');
    //     }
    // }

    public function deleteUsers()
    {
        // dd($this->selectedUsers);
        User::whereIn('id', $this->selectedUsers)->delete();

        // Clear the selection after deleting users
        $this->selectedUsers = [];

        session()->flash('message', 'Users deleted successfully.');
    }
}
