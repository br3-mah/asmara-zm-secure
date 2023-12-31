<?php

namespace App\Traits;

use App\Models\Guest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

trait UserTrait{

    public function registerUser($request){
        $password = 'asmara4Gud';
        $check = User::where('email', $request->input('email'))->first();
        if($check == null){
            try {
                
                $request->validate([
                    // Your other form field validation rules...
                    'g-recaptcha-response' => 'required|captcha',
                ]);
                
                $user = User::create([
                    'fname' => $request->input('fname'),
                    'lname' => $request->input('lname'),
                    'email' => $request->input('email'),
                    'password' => Hash::make($password),
                    'terms' => 'accepted'
                ]);
                
                Guest::create([
                    'user_id' => $user->id,
                    'country' => $request->input('country'),
                    'phone_number' => $request->input('phone')
                ]);
                return $user;
            } catch (\Throwable $th) {
                return [];
            }
        }else{
            return $check;
        }
        
    }

    public function getGuests(){
        return Guest::with('users')->get();
    }
}

