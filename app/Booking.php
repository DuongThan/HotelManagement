<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public $table = "Booking";
    protected $primaryKey = 'bookingId';
    public $timestamps = false;
}
