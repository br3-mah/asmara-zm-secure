<?php

namespace App\Traits;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

trait RoomTrait {

    public function getTotalRooms(){
        return Room::get()->count();
    }

    public function getAllBookedRooms(){
        return Room::where('is_available', 0)->with('staff')->with('room_types')->get();
    }

    public function getAllRooms(){
        return Room::with('staff')->with('room_types')->get();
    }

    public function getAllRoomTypes(){
        return RoomType::with('users')->get();
    }

    public function saveRoomType($request){
        // Bug: image unable to save
        if ($request->file('image_path')) {
            $cover_image = Storage::put('public/room_types', $request->file('image_path'));
        }
        $data = RoomType::create($request->toArray());
        $data->cover_image = $cover_image;
        $data->save();

        if(!empty($data->toArray())){
            return true;
        }else{
            return false;
        }
    }
    public function saveRoom($request){
        // Bug: image unable to save
        if ($request->file('image_path')) {
            $image_path = Storage::put('public/rooms', $request->file('image_path'));
        }
        $data = Room::create($request->toArray());
        $data->image_path = $image_path;
        $data->save();

        if(!empty($data->toArray())){
            return true;
        }else{
            return false;
        }
    }

    public function toggleRoomStatus($id){
        $room = Room::find($id);
        $room->is_available = !$room->is_available;
        $room->save();
    }


}