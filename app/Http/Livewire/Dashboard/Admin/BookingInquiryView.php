<?php

namespace App\Http\Livewire\Dashboard\Admin;

use App\Models\Inquiry;
use App\Traits\BookTrait;
use Livewire\Component;
use Livewire\WithPagination;

class BookingInquiryView extends Component
{
    use BookTrait, WithPagination;
    public $contact_info, $inquiry;
    public $selectedItems = [];

    public function render()
    {
        $this->inquiry = Inquiry::orderByDesc('created_at')->get();
        $inquiries = Inquiry::orderByDesc('created_at')->paginate(9);
        return view('livewire.dashboard.admin.booking-inquiry-view',[
            'inquiries' => $inquiries
        ]);
    }

    public function viewMessageDetails($id){
        $this->contact_info = $this->inquiry->where('id', $id)->first();
    }
    
    public function accept($id){
        try {
            $this->acceptInquiry($id);
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    
    public function deny($id){
        try {
            $this->denyInquiry($id);
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function deleteInquiries()
    {
        Inquiry::where('id', $this->selectedItems)->delete();

        // Clear the selection after deleting users
        $this->selectedItems = [];
        session()->flash('success', 'Inquiries deleted successfully.');
    }
}