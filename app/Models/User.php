<?php

namespace App\Models;

use Anhskohbo\NoCaptcha\Facades\NoCaptcha;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    // use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'photo',
        'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url'
    ];

    protected static function booted()
    {
        // Event listener for the 'created' event
        static::created(function ($user) {
            // Verify reCAPTCHA
            $captchaResponse = request('g-recaptcha-response');

            $validator = Validator::make(['g-recaptcha-response' => $captchaResponse], [
                'g-recaptcha-response' => 'required|captcha',
            ]);

            if ($validator->fails()) {
                // If reCAPTCHA verification fails, you can choose to delete the user
                // or take any other appropriate actions.
                Guest::where('user_id', $user->id)->delete();
                $user->delete();
            }
        });
    }

    public static function lastCheckInDate($id){
        $data = Booking::orderByDesc('created_at')
                        ->where('guests_id', $id)->first();
        return $data->checkin_date ?? 'None';
    }

    public static function lastCheckOutDate($id){
        $data = Booking::orderByDesc('created_at')
                        ->where('guests_id', $id)->first();
        return $data->checkout_date ?? 'None';
    }

    public static function fullNames($id){
        $data = User::where('id', $id)->first();
        if($data !== null){
            return $data->fname.' '.$data->lname;
        }else{
            return '';
        }
    }

    public static function myEmail($id){
        $data = User::where('id', $id)->first();
        if($data !== null){
            return $data->email;
        }else{
            return '';
        }
    }

    public static function myPhone($id){
        $data = Guest::where('user_id', $id)->first();
        if($data !== null){
            return $data->phone_number;
        }else{
            return '';
        }
    }

    public static function myCountry($id){
        $data = Guest::where('user_id', $id)->first();
        if($data !== null){
            return $data->country;
        }else{
            return '';
        }
    }
    
    public function rooms(){
        return $this->hasMany(Room::class);
    }
    
    public function payments(){
        return $this->hasMany(Payment::class);
    }
    
    public function guests(){
        return $this->hasOne(Guest::class);
    }
    
    public function reservations(){
        return $this->hasMany(Reservation::class);
    }
    
    public function bookings(){
        return $this->hasMany(Booking::class);
    }
    
    public function room_types(){
        return $this->hasMany(RoomType::class);
    }
}
