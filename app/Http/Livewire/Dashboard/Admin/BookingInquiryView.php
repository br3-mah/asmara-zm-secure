<?php

namespace App\Http\Livewire\Dashboard\Admin;

use App\Models\Inquiry;
use App\Traits\BookTrait;
use Livewire\Component;

class BookingInquiryView extends Component
{
    use BookTrait;
    public $inquiries, $contact_info;

    public function render()
    {
        $this->inquiries = Inquiry::get();
        return view('livewire.dashboard.admin.booking-inquiry-view');
    }

    public function viewMessageDetails($id){
        $this->contact_info = $this->inquiries->where('id', $id)->first();
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