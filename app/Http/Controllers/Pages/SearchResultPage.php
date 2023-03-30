<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\RoomType;
use Illuminate\Http\Request;

class SearchResultPage extends Controller
{
    public function index(Request $request){
        $encodedArray = $request->input('myData');
        $final_results = json_decode(urldecode($encodedArray), true);
        $room_types = RoomType::get();
        return view('pages.search-result-page-view',[
            'room_types' => $room_types,
            'rooms' => $final_results
        ]);
    }
}
