<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    public $table = "RoomType";
    protected $primaryKey = 'roomTypeId';
    public $timestamps = false;
}
