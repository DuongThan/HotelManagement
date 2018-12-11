<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = "User";
    protected $primaryKey = 'userName';
    public $incrementing = false;
    public $timestamps = false;
}
