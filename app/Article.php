<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $table = "Article";
    protected $primaryKey = 'articleId';
    public $timestamps = false;
}
