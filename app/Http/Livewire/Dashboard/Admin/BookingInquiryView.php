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

    public function render()
    {
        $this->inquiry = Inquiry::get();
        $inquiries = Inquiry::paginate(9);
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
}