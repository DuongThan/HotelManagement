<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomTypeController extends Controller
{
    public function getRoomType(){
        return view('admin/roomtype/getRoomType');
    }
    public function getRoomTypePrice(){
        return view('admin/roomtype/getRoomTypePrice');
    }
}
