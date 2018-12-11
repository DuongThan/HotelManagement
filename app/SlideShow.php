<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlideShow extends Model
{
    public $table = "SlideShow";
    protected $primaryKey = 'slideShowId';
    public $timestamps = false;
}
