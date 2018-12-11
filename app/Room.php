<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public $table = "Room";
    protected $primaryKey = 'roomId';
    public $timestamps = false;
}
