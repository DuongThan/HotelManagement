<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    public function getRoom(){
        return view('admin/room/getRoom');
    }
    public function getRoomPrice(){
        return view('admin/room/getRoomPrice');
    }
}
