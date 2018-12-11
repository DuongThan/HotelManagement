<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public $table = "Hotel";
    protected $primaryKey = 'hotelId';
    public $timestamps = false;
}
