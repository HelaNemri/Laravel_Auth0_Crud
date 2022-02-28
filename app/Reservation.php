<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'user_id',
        'room_id',
        'num_of_guests',
        'arrival',
        'departure'
    ];
    // a Reservation can honly have one room
    public function room()
    {
        return $this->belongsTo('App\Room');
    }
}
