<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\RoomType;
use Illuminate\Http\Request;

class AboutUsPage extends Controller
{
    public function index(){
        $room_types = RoomType::get();
        return view('pages.about-us-page-view',[
            'room_types' => $room_types
        ]);
    }
}
