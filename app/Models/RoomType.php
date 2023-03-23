<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'added_by',
        'description',
        'size',
        'price', 
        'per',
        'cover',
        'comments'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'added_by');
    }

    public function rooms(){
        return $this->hasMany(Room::class);
    }
}