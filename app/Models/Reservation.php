<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'guests_id',
        'rooms_id',
        'reservation_date',
        'reservation_code',
        'checkin_date',
        'checkout_date',
        'num_adults',
        'num_children',
        'special_requests',
        'is_confirmed',
        'confirmation_date',
        'cancellation_date',
        'is_cancelled',
        'comments'
    ];

    public function guests(){
        return $this->belongsTo(Guest::class, 'guests_id');
    }

    public function rooms(){
        return $this->belongsTo(Room::class, 'rooms_id');
    }

    public function bookings(){
        return $this->hasOne(Booking::class);
    }
}
