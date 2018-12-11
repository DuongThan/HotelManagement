<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $table = "Contact";
    protected $primaryKey = 'contactId';
    public $timestamps = false;
}
