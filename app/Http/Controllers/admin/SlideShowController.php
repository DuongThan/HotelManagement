<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SlideShowController extends Controller
{
    public function getSlideShow(){
        return view('admin/slideshow/getSlideShow');
    }
}
