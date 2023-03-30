<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Mail\ContactEmail;
use App\Models\Inquiry;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsPage extends Controller
{

    public function index(){
        $room_types = RoomType::get();
        return view('pages.contact-us-page-view',[
            'room_types' => $room_types
        ]);
    }

    public function submitContact(Request $request){

        try {
            $mail = [
                'subject' => $request->input('subject'),
                'number' => $request->input('number'),
                'email' => $request->input('email'),
                'message' => $request->input('message'),
                'to' => 'nyeleti.bremah@gmail.com'
            ];
            Inquiry::create([
                'phone' => $request->input('number'),
                'email' => $request->input('email'),
                'message' => $request->input('message'),
                'subject' => $request->input('subject')
            ]);
            $contact_email = new ContactEmail($mail);
            Mail::to($mail['to'])->send($contact_email);
            return response()->json([
                'title' => 'Customer Support',
                'message' => 'Message successfully sent.',
                'code' => 'success'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'title' => 'Customer Support',
                'message' => 'Failed to send contact information, check your internet and try again.',
                'code' => 'error'
            ]);
        }
    }
}
